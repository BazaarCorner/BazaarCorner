<?php

namespace BazaarCorner\Http\Controllers\Membership;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Models\Memebership\Member;
use BazaarCorner\Models\Membership\User;
use BazaarCorner\Services\Catalog\ProductService;

class PageController extends Controller
{
    protected $member;
    
    public function show(ProductService $product, $username)
    {
        $this->member = User::where('username', $username)->first();
        
        $this->data['member']['info'] = $this->getInfo();
        $this->data['member']['rankings'] = $this->getRankings();
        $this->data['member']['feedbacks'] = $this->getFeedbacks();
        
        $this->data['product']['filters'] = $this->getFilters();
        $this->data['product']['items'] = $this->getFilteredItems();
        
        $this->data['products'] = $product->merchantProducts($this->member->id);
        
        return view('membership.index', $this->data);
    }
    
    private function getInfo()
    {
        if ($this->member) {
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
