<?php

namespace BazaarCorner\Http\Controllers;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('shop.index');
    }
}
