<?php

namespace BazaarCorner\Http\Controllers;

use Illuminate\Http\Request;
use BazaarCorner\User;
use BazaarCorner\Merchant;

class UserController extends Controller
{
    /**
     * THIS METHOD IS REQUIRED, DO NOT REMOVE.
     * 
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }
    
    /**
     * Fetch User's page information
     * 
     * @return View
     */
    public function index($username)
    {
        $this->data['user']     = $this->getInfo($username);
        $this->data['filters']  = $this->getFilters();
        
        //TO DO
//        $this->data['followers']  = $this->countFollowers();
//        $this->data['items_sold']    = $this->itemSold();
//        $this->data['ratings']  = $this->userRatings();
//        $this->data['feedbacks']  = $this->userFeedbacks();
        
        return view('merchant.index', $this->data);
    }
    

    /**
     * Validate if User or Merchant data exists
     * 
     * 
     * @todo Refactor this implementation.
     * 
     * @param string username
     * @return User | Merchant
     */
    private function getInfo($username)
    {
        
//        if ($merchant = Merchant::where('username', $username)->first()) {
//            
//            $merchant->age = $this->getAge($merchant->birthdate);
//            return $merchant;
//        }
        
        if ($user = User::where('username', $username)->first()) {            
//            $user->age = $this->getAge($user->birthdate);
            return $user;
        }
        
        
        
        // Missing information or page not found
        abort(404);
    }

    private function getUser()
    {
        if (!$profile = $this->data['user'])
            throw new \Exception('Missing user profile');
        
        return $profile;
    }

    /**
     * @param Date Birthdate
     * @return int
     */
    private function getAge($date)
    {
        $birthdate = new \DateTime($date);
        $currdate = new \DateTime("NOW");
        
        return $currdate->diff($birthdate)->y;
    }
    
    private function countFollowers()
    {
        return $this->getUser()->followers()->count();
    }

    private function itemSold()
    {
        return $this->getUser()
                ->orders()
                ->where('order_status', '2000')
                ->count();
    }
    
    protected function getPageFilters()
    {
        return [];
    }

    /**
     * @todo Rating computation
     * @return int
     */
    private function userRatings()
    {
        return 0;
    }
    
    /**
     * @todo Fetch Feedback
     * @return int
     */
    private function userFeedbacks()
    {
        return [];
    }
}
