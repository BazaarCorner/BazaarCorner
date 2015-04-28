<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use BazaarCorner\Models\Catalog\Product;
use BazaarCorner\Http\Requests\Catalog\ProductRequest;
use BazaarCorner\Services\Traits\SluggableValue;
use BazaarCorner\Services\Catalog\BrandService;

class ProductController extends Controller
{
    use SluggableValue;
    
    protected $product;
    protected $brand;

    public function __construct(Guard $auth, Registrar $registrar, Product $product, BrandService $brand)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->product = $product;
        $this->brand = $brand;
        
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
        
        return view("catalog.product.create", $this->data);
	}
    
	public function store(ProductRequest $request)
	{
		$input = $request->all();
        $input['slug'] = $this->getSlugValue($input['name']);
        $input['merchant_id'] = $this->auth->user()->id;
        
        $this->product->create($input);        
        
        $this->getProducts();        
        return view('catalog.product', $this->data);
	}

    
	public function show($id)
	{
		//
	}
    
	public function edit($id)
	{
        $this->data['product'] = $this->product->where('merchant_id', $this->auth->user()->id)->findOrFail($id);
        $this->data['brands'] = $this->brand->getBrands();
        return view('catalog.product.update', $this->data);
	}

    
	public function update($id, ProductRequest $request)
	{
		$product = $this->product->findOrFail($id);
        
        $product->fill($request->all());
        $product->save();
        
        $this->getProducts();
        
		return view('catalog.product', $this->data);
	}

    
	public function destroy($id)
	{
		//
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
