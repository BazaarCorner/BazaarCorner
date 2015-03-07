<?php namespace BazaarCorner\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index(Request $request)
    {
        $sku = $request->get('sku');
        return view('product.index');
    }
}
