<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;

class ProductController extends Controller
{
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->data['user'] = $this->auth->user();
    }
    
	public function index()
	{
		return view('catalog.product', $this->data);
	}

    
	public function create()
	{
		//
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
