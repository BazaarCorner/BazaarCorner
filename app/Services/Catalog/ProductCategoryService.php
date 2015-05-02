<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Category;
use BazaarCorner\Models\Catalog\ProductCategory;

class ProductCategoryService
{

    private $product_category;
    private $category;
    private $subcategory;

    public function __construct(Category $category, ProductCategory $prod_cat)
    {
        $this->category = $category;
        $this->product_category = $prod_cat;
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
