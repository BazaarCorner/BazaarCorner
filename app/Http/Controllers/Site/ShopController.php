<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Models\Catalog\Category;
use BazaarCorner\Services\Catalog\ProductService;

class ShopController extends Controller
{
    protected $service;
    
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
    
    public function index($category, $subcategory)
    {
        $this->data['category'] = $this->getCategory($category);
        $this->data['products'] = $this->service
            ->getProductsByCategory($this->getSubcategory($subcategory)->id);        
        
        return view('site.store', $this->data);
    }
    
    private function getCategory($category)
    {
        $cat = Category::where('slug', $category)
                ->where('is_active', true)
                ->first();
        
        if (!$cat) {
            abort(404);
        }
        
        return $cat;
    }
    
    private function getSubcategory($subcategory)
    {
        $subcat = Category::where('slug', $subcategory)
                ->where('is_active', true)
                ->first();
        
        if (!$subcat) {
            abort(404);
        }
        
        return $subcat;
    }
}
