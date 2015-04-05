<?php

namespace BazaarCorner\Http\Controllers;

//use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function index(Auth $auth)
    {
        var_dump(get_class_methods($auth->user())); exit;
        $this->data['user'] = $auth->user();
        
        return view('auth.index', $this->data);
    }
}
