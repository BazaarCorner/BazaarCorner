<?php

namespace BazaarCorner\Http\Controllers;

use BazaarCorner\Http\Requests\SearchRequest;
use Illuminate\Http\Request;

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
    /**
     * THIS METHOD IS REQUIRED, DO NOT REMOVE.
     * 
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }    
    
    public function index(SearchRequest $request)
    {
        $term = $request->get('q');
        
        $this->data['term'] = $term;
        
        return view('site.serp', $this->data);
    }
    
    protected function getPageFilters()
    {
        return [];
    }
}
