<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Models\Catalog\Category;
use BazaarCorner\Models\Catalog\Subcategory;

class ShopController extends Controller
{
    public function index($category, $subcategory)
    {
        $this->data['categories'] = $this->getCategories($category, $subcategory);
        
        return view('site.store', $this->data);
    }
    
    private function getCategories($category, $subcategory)
    {
        $this->category = Category::where('slug', $category)
                ->where('is_active', true)
                ->first();
        
        if (!$this->category) {
            abort(404);
        }
    }
}
