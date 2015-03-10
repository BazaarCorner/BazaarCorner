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
        $this->data['filters']  = $this->filters();

        //TO DO
        $this->data['followers']  = $this->countFollowers();
        $this->data['items_sold']    = $this->itemSold();
        $this->data['ratings']  = $this->userRatings();
        $this->data['feedbacks']  = $this->userFeedbacks();
        
        return view('profile.index', $this->data);
    }
    

    /**
     * Validate if User or Merchant data exists
     * 
     * @param string username
     * @return User | Merchant
     */
    private function getInfo($username)
    {   
        if ($merchant = Merchant::where('username', $username)->first()) {
            
            $merchant->age = $this->getAge($merchant->birthdate);
            return $merchant;
        }
        
        if ($user = User::where('username', $username)->first()) {
            
            $user->age = $this->getAge($user->birthdate);
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
    
    private function filters()
    {
        if (!$param = $this->request->has('sort-by')) {
            $sort_by = 'all';
        } else {
            $sort_by = strtolower($this->request->get('sort-by'));
        }
        
        
        switch ($sort_by) {
            case 'all':
//            case 'popularity':
//            case 'most-recent':
//            case 'most-bought':
//            case 'discounts':
                //DO NOTHING
                break;
            default :
                // Invalid request
                abort(404);
        }        
        
        $filters = [
            [
                'active'    => ($sort_by === 'all')? true : false,
                'url'       => $this->request->getPathInfo().'?sort-by=all',
                'name'      => 'All'
            ],
//            [
//                'active' => ($sort_by === 'popularity')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=popularity',
//                'name'      => 'Popularity'
//            ],
//            [
//                'active' => ($sort_by === 'most-recent')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=most-recent',
//                'name'      => 'Most Recent'
//            ],
//            [
//                'active' => ($sort_by === 'most-bought')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=most-bought',
//                'name'      => 'Most Bought'
//            ],
//            [
//                'active' => ($sort_by === 'discounts')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=discounts',
//                'name'      => 'Discounts'
//            ],
        ];
        
//        $profile = $this->getUser();
//                
//        if ($profile instanceof Merchant) {
//            
//            
//        } elseif ($profile instanceof User) {
//            
//        }
        
        return $filters;
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
