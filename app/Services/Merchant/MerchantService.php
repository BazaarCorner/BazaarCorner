<?php

namespace BazaarCorner\Services\Merchant;

use BazaarCorner\Models\Membership\Member;

class MerchantService
{
    protected $merchant;
    
    public function __construct(Member $merchant)
    {
        $this->merchant = $merchant;
    }
    
    public function getFeaturedMerchants()
    {
        return $this->merchant->all()->random(2);
    }
}
