<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Http\Requests\SearchRequest;
use BazaarCorner\Services\Catalog\ProductService;

/**
 * Search sequence
 * 
 * 1. Product Name
 * 2. Brand Name
 * 3. Part name (optional)
 * 4. Category
 */
class SearchController extends Controller
{
    protected $service;
    
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
    
    public function index(SearchRequest $request)
    {
        $term = $request->get('q');
        
        $this->data['products'] = $this->service->search($term);
        $this->data['term'] = $term;
        
        return view('site.serp', $this->data);
    }
    
    protected function getPageFilters()
    {
        return [];
    }    
}
