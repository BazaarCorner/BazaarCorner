<?php

namespace BazaarCorner\Http\Controllers\Catalog;

use BazaarCorner\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('catalog.index');
    }
}
