<?php

namespace BazaarCorner\Services;

use BazaarCorner\Models\Membership\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract
{
    public function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'username'  => 'required|max:50|unique:users',
                'email'     => 'required|email|max:255|unique:users',
                'password'  => 'required|confirmed|min:6'
            ]
        );
    }
    
    public function create(array $data)
    {
        return User::create(
            [
                'username'  => $data['username'],
                'password'  => bcrypt($data['password']),
                'email'     => $data['email']
            ]
        );
    }
}
