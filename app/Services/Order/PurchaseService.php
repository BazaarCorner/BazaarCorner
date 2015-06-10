<?php

namespace BazaarCorner\Services\Order;

use BazaarCorner\Models\Catalog\Product;

class PurchaseService
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function mostBought()
    {
        return $this->product->all()->random(10);
    }
}
