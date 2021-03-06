<?php

namespace BazaarCorner\Http\Controllers\Auth;

use BazaarCorner\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;
    
    protected $redirectTo = 'member/account';
    protected $loginPath = 'member/login';

    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;
        $this->data['user'] = $this->auth->user();
        
        $this->middleware('guest', ['except' => ['getLogout', 'viewAccount']]);
    }
    
    public function viewAccount()
    {
        return view('auth.index', $this->data);
    }
    
    
    public function edit($username)
    {
        
    }
}