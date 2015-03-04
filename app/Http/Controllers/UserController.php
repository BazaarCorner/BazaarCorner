<?php

namespace BazaarCorner\Http\Controllers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('site.user-page');
    }

}
