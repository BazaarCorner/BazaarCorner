<?php

namespace BazaarCorner\Http\Controllers\Auth;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    use ResetsPasswords;
    
    public function __construct(Guard $auth, PasswordBroker $passwords)
    {
        $this->auth = $auth;
        $this->passwords = $passwords;
        
        $this->middleware('guest');
    }
}
