<?php

namespace BazaarCorner\Http\Controllers;

use BazaarCorner\Http\Requests\SearchRequest;

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
}
