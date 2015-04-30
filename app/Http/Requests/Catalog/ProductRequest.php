<?php

namespace BazaarCorner\Http\Requests\Catalog;

use BazaarCorner\Http\Requests\Request;

class ProductRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [            
            'name'          => 'required',
            'description'   => 'required',
            'brand_id'      => 'required',
		];
	}
}
