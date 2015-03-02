<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Category;

class MainMenuViewHelper implements ViewHelperAwareInterface
{
    /**
     * @var BazaarCorner\Category
     */
    protected $category;
    
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function composeView(View $view)
    {
        $view->with('main_category', $this->category->getParentCategory());
    }
}
