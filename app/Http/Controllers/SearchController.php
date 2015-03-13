<?php

namespace BazaarCorner\Http\Controllers;

use BazaarCorner\Http\Requests\SearchRequest;

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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(SearchRequest $request)
    {
        $term = $request->get('q');
        return view('search.index', ['term' => $term]);
    }
    
    protected function getPageFilters()
    {
        return [];
    }
}
