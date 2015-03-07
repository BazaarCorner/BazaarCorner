<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use BazaarCorner\User;
use BazaarCorner\Merchant;

class UserViewHelper
{
    protected $profile;
    
    protected $user;
    
    protected $merchant;


    public function __construct(
        User $user,
        Request $request,
        Merchant $merchant
    ) {
        $this->user = $user;
        $this->merchant = $merchant;
        
        $this->profile = $this->checkIdentity(
            str_slug($request->getRequestUri(), '/')
        );
    }
    
    public function getInfo(View $view)
    {
        $this->profile->age = $this->getAge();
        
        $view->with('user', $this->profile);
    }
    
    public function countFollowers(View $view)
    {
        $view->with('followers', $this->profile->followers()->count());
    }
    
    public function itemSold(View $view)
    {
        $orders = $this->profile->orders()->where('order_status', '2000');
        
        $view->with('items_sold', $orders->count());
    }
    
    /**
     * @todo Ratings computation
     * @param \BazaarCorner\Http\Helpers\VIew $view
     */
    public function getRatings(VIew $view)
    {
        $view->with('ratings', 0);
    }
    
    /** 
     * @todo View All feedbacks
     * @param View $view
     */
    public function getFeedback(View $view)
    {
        $view->with('feedbacks', $this->viewUserFeedback());
    }

    private function getAge()
    {
        $birthdate = new \DateTime($this->profile->birthdate);
        $currdate = new \DateTime("NOW");
        
        return $currdate->diff($birthdate)->y;
    }
    
    /**
     * @param type $username
     * @return type
     */
    private function checkIdentity($username)
    {
        $merchant = $this->merchant->where("username", $username)->first();
        
        if (!$merchant instanceof Merchant) {
            return $this->user->where("username", $username)->first();
        }
        
        return $merchant;
    }
    
    
    /** 
     * Dummy function with dummy data
     * @return Array
     */
    private function viewUserFeedback()
    {
        return [
            
        ];
    }
}
