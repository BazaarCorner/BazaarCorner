<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Product;

class ProductService
{
    private $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function newlyAdded()
    {
        return $this->product->get();
    }
    
    public function halfPriced()
    {
        return $this->product->where('is_active', true)->get();
    }
    
    public function merchantProducts($id)
    {
        return $this->product->where('merchant_id', $id)->get();
    }
}
