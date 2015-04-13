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
                'first_name'    => 'required',
                'last_name'     => 'required',
                'username'      => 'required|max:50|unique:users',
                'email'         => 'required|email|max:255|unique:users',
                'password'      => 'required|min:8'
            ]
        );
    }
    
    public function create(array $data)
    {
        return User::create(
            [
                'first_name'    => $data['first_name'],
                'last_name'     => $data['last_name'],
                'username'      => $data['username'],
                'password'      => bcrypt($data['password']),
                'email'         => $data['email']
            ]
        );
    }
}
