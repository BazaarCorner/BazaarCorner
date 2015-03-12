<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\ShopCategory;

class MainMenuViewHelper implements ViewHelperAwareInterface
{
    /**
     * Fetch site category for the main (drop-down) menu.
     * 
     * @param View $view
     */
    public function composeView(View $view)
    {
        $view->with('stores', ShopCategory::where('is_active', true)->get());
    }
}
