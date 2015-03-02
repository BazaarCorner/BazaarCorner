<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Product;

class ProductViewHelper
{
    protected $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function recentlyAdded(View $view)
    {
        $view->with(
            'pages',
            array_chunk($this->product->getRecentlyAdded(), 6)
        );
    }
    
    public function halfPriced(View $view)
    {
        $view->with('items', $this->product->getHalfPricedItems());
    }
}
