<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use BazaarCorner\Models\Catalog\Brand;
use BazaarCorner\Http\Requests\Catalog\CreateBrandRequest as BrandRequest;
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
        $this->data['brands'] = $this->brand->where('is_active', true)->get();
        
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
        
        $brand = $this->brand->create($input);
        $this->data['brands'] = $brand->all();
        
		return view('catalog.brand', $this->data);
	}

	
    public function show($id)
	{
		//
	}

	
    public function edit($id)
	{
		//
	}

    
	public function update($id)
	{
		//
	}

    
	public function destroy($id)
	{
		//
	}
}
