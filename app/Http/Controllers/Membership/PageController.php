<?php

namespace BazaarCorner\Http\Controllers\Membership;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Models\Memebership\Member;
use BazaarCorner\Models\Membership\User;

class PageController extends Controller
{
    protected $member;
    
    public function show($username)
    {
        $this->member = User::where('username', $username)->first();
        
        $this->data['member']['info'] = $this->getInfo();
        $this->data['member']['rankings'] = $this->getRankings();
        $this->data['member']['feedbacks'] = $this->getFeedbacks();
        
        $this->data['product']['filters'] = $this->getFilters();
        $this->data['product']['items'] = $this->getFilteredItems();
        
        return view('membership.index', $this->data);
    }
    
    private function getInfo()
    {
        if ($this->member) {
            $this->member->facebook = "https://www.facebook.com/gabbydgab";
            $this->member->twitter = "https://twitter.com/gabbydgab";
            $this->member->address = "Iligan City, Philippines";
            //$member->age = $this->getAge($user->birthdate);
            return $this->member;
        }
        
        // Missing record or page not found
        abort(404);
    }
    
    private function getRankings()
    {
        return [
            'items' => 0,
            'ratings' => 0,
            'followers' => 0,
        ];
    }
    
    private function getFeedbacks()
    {
        return [];
    }
    
    private function getFilteredItems()
    {
        return [];
    }
}
