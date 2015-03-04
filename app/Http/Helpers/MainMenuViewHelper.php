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
    
    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    /**
     * Fetch parent/main category for the main (drop-down) menu.
     * 
     * Added slug (attribute) for pretty-url
     * 
     * @param View $view
     * @uses parentCategory() method as Query Scope
     * @see http://laravel.com/docs/5.0/eloquent#query-scopes
     */
    public function composeView(View $view)
    {
        $categories = $this->category->parentCategory()->get();
        
        foreach ($categories AS $category) {
            $category->slug = strtolower(str_replace(" ", "-", $category->name));
            $main []= $category;
        }
        
        $view->with('main_category', $main);
    }
}
