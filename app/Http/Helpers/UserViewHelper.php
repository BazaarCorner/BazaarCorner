<?php

namespace BazaarCorner\Http\Helpers;

use BazaarCorner\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserViewHelper
{
    protected $user;    
    
    public function __construct(User $user, Request $request)
    {
        $username = str_slug($request->getRequestUri(), '/');
        $this->user     = $user->where("username", $username)->first();
    }
    
    public function getInfo(View $view)
    {
        $this->user->age = $this->getAge();
        
        $view->with('user', $this->user);
    }
    
    public function countFollowers(View $view)
    {
        $view->with('followers', $this->user->followers()->count());
    }
    
    
    private function getAge()
    {
        $birthdate = new \DateTime($this->user->birthdate);
        $currdate = new \DateTime("NOW");
        
        return $currdate->diff($birthdate)->y;
    }
}
