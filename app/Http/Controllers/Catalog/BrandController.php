<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use BazaarCorner\Models\Catalog\Brand;
use BazaarCorner\Http\Requests\Catalog\BrandRequest;
use BazaarCorner\Services\Traits\SluggableValue;

class BrandController extends Controller
{
    use SluggableValue;
    
    private $brand;
    
    public function __construct(Guard $auth, Registrar $registrar, Brand $brand)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->brand = $brand;
        
        $this->data['user'] = $this->auth->user();
    }
    
    public function index()
	{
        $this->getBrands();
        
		return view('catalog.brand', $this->data);
	}

    public function create()
	{
        return view('catalog.brand.create', $this->data);
	}

    public function store(BrandRequest $request)
	{
        $input = $request->all();
        $input['slug'] = $this->getSlugValue($input['name']);
        
        $this->brand->create($input);
        
        $this->getBrands();
        
		return view('catalog.brand', $this->data);
	}

	
    public function show($id)
	{
		//
	}
	
    public function edit($id)
	{
		$this->data['brand'] = $this->brand->findOrFail($id);
        
        return view('catalog.brand.update', $this->data);
	}

    
	public function update($id, BrandRequest $request)
	{        
		$brand = $this->brand->findOrFail($id);
        
        $brand->fill($request->all());
        $brand->save();
        
        $this->getBrands();
        
		return view('catalog.brand', $this->data);
	}

    
	public function destroy($id)
	{
        
	}
    
    /**
     * @return void
     */
    private function getBrands()
    {
        $this->data['brands'] = $this->brand->all();
    }
}
