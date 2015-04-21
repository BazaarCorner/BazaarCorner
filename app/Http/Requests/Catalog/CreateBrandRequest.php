<?php

namespace BazaarCorner\Http\Requests\Catalog;

use BazaarCorner\Http\Requests\Request;

class CreateBrandRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
            'name'          => 'required|unique:brands',
//            'slug'          => 'require|unique:brands',
            'description'   => 'required'
		];
	}
}
