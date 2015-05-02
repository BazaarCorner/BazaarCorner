<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use BazaarCorner\Models\Catalog\Product;
use BazaarCorner\Http\Requests\Catalog\ProductRequest;
use BazaarCorner\Services\Traits\SluggableValue;
use BazaarCorner\Services\Catalog\BrandService;
use BazaarCorner\Services\Catalog\ProductCategoryService;

class ProductController extends Controller
{
    use SluggableValue;
    
    protected $product;
    protected $brand;
    protected $category;

    public function __construct(
        Guard $auth,
        Registrar $registrar,
        Product $product,
        BrandService $brand,
        ProductCategoryService $category
    ) {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->product = $product;
        $this->brand = $brand;
        $this->category = $category;
        
        $this->data['user'] = $this->auth->user();
    }
    
    public function index()
    {
        $this->getProducts();
        
        return view('catalog.product', $this->data);
	}
    
    public function create()
    {
        $this->data['brands'] = $this->brand->getBrands();
        $this->data['categories'] = $this->category->getCategories();
        $this->data['subcategories'] = $this->category->getCategories();
        
        return view("catalog.product.create", $this->data);    
    }
    
    public function store(ProductRequest $request)
    {
        // Append hidden values
        $input = $request->all();
        $input['slug'] = $this->getSlugValue($input['name']);
        $input['merchant_id'] = $this->auth->user()->id;
        $input['sku'] = $this->auth->user()->id . "-" . time(); // temporary

        $product = $this->product->create($input);

        return redirect(route('member.catalog.product.index'))
            ->with('message', 'Your product has been created!');
        
    }
    

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->data['product'] = $this->product
            ->where('merchant_id', $this->auth->user()->id)
            ->findOrFail($id);

        $this->data['brands'] = $this->brand->getBrands();

        return view('catalog.product.update', $this->data);
    }


    public function update($id, ProductRequest $request)
    {
        $product = $this->product->findOrFail($id);        
        $product->fill($request->all());
        $product->save();

        return redirect(route('member.catalog.product.index'))
            ->with('message', 'Your product has been updated!');
    }


    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return redirect(route('member.catalog.product.index'))
            ->with('message', 'Your product has been deleted!');
    }
    
    /**
     * @return void
     */
    private function getProducts()
    {
        $this->data['products'] = $this->product
            ->where('merchant_id', $this->auth->user()->id)
            ->get();
    }
}
