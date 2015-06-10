<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Models\Catalog\Category;

class MainMenuViewHelper implements ViewHelperAwareInterface
{
    /**
     * Fetch site category for the main (drop-down) menu.
     * 
     * @param View $view
     */
    public function composeView(View $view)
    {
        $view->with('stores', Category::where('is_active', true)->where('parent_id', null)->get());
    }
}
