<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\BazaarCategory;

class MainMenuViewHelper implements ViewHelperAwareInterface
{
    /**
     * Fetch site category for the main (drop-down) menu.
     * 
     * @param View $view
     */
    public function composeView(View $view)
    {
        $view->with('stores', BazaarCategory::where('is_active', true)->get());
    }
}
