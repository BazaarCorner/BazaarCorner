<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Services\Catalog\ProductService;

class SkuDetailsController extends Controller
{
    protected $product;
    
    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }
    
    
    public function index($sku)
    {
        $this->data['product'] = $this->product->getProductInfo($sku);
        
        return view('site.sku', $this->data);
    }
}
