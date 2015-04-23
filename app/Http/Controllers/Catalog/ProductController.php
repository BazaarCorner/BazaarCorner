<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use BazaarCorner\Models\Catalog\Product;

class ProductController extends Controller
{
    protected $product;
    
    public function __construct(Guard $auth, Registrar $registrar, Product $product)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->product = $product;
        
        $this->data['user'] = $this->auth->user();
    }
    
	public function index()
	{
        $this->data['products'] = $this->product->where('is_active')->get();
        
        return view('catalog.product', $this->data);
	}

    
	public function create()
	{
		return view('catalog.product.create', $this->data);
	}

    
	public function store()
	{
		//
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
