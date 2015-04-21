<?php

namespace BazaarCorner\Services;

use BazaarCorner\Models\Membership\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract
{
    private $rules = [
        'first_name'    => 'required',
        'last_name'     => 'required',
        'username'      => 'required|max:50|unique:users',
        'email'         => 'required|email|max:255|unique:users',
        'password'      => 'required'
    ];
    
    public function validator(array $data)
    {
        if (array_key_exists('is_merchant', $data)) {
            
            $merchant_rules = [
                'is_merchant' => "required|boolean",
            ];
            
            $this->rules = array_merge($this->rules, $merchant_rules);
        }
        
        return Validator::make($data, $this->rules);
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
