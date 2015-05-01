<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Category;

class CategoryService
{
    private $category;
    private $subcategory;
    
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function getCategories()
    {
        return $this->category->get();
    }
    
    public function getSubcategories()
    {
        $this->getCategories()->subcategory()->get();
    }
}
