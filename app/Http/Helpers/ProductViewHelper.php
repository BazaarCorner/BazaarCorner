<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Item;

class ProductViewHelper
{
    protected $item;
    
    public function __construct(Item $item)
    {
        $this->item = $item;
    }
    
    public function recentlyAdded(View $view)
    {
        $view->with('pages', array_chunk($this->item->recentlyAdded(), 6));
    }
    
    public function halfPriced(View $view)
    {
        $view->with('items', $this->item->halfPriced());
    }
}
