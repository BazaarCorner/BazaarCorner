<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table = 'merchants';
    
    public function fetured()
    {
//        return $this->table->where()->get();
        
        //sample
        return [
            [
                'name' => 'HeartStrings',
                'discount' => 60,
                'logo' => 'img/featured_merchant/hearstrings.jpg',
                'shipping' => 'PH Nationwide'
            ],
            [
                'name' => 'JetSetter',
                'discount' => 50,
                'logo' => 'img/featured_merchant/jet-setter.jpg',
                'shipping' => 'PH Nationwide'
            ],
            [
                'name' => 'Zico',
                'discount' => 70,
                'logo' => 'img/featured_merchant/zico.jpg',
                'shipping' => 'PH Nationwide'
            ],
        ];
    }
//    
//    public function findByName($name)
//    {
//        return $this->table->where('name', $name)->first();
//    }

    /**
     * Fetch Items model object
     * 
     * @return BazaarCorner\Items
     */
    public function items()
    {
        return $this->hasMany('BazaarCorner\Items');
    }
    
    /**
     * Fetch Users model object
     * 
     * @return BazaarCorner\User
     */
    public function user()
    {
        return $this->belongsTo('BazaarCorner\User');
    }
    
    /** 
     * Fetch merchant followers
     * 
     * @return BazaarCorner\MerchantFollowers
     */
    public function followers()
    {
        return $this->hasMany('BazaarCorner\MerchantFollower', 'user_id');
    }
    
    public function orders()
    {
        return $this->hasMany('BazaarCorner\Order', 'merchant_id');
    }
    
    public function feedback()
    {
        return $this->hasMany('BazaarCorner\MerchantFeedback', 'merchant_id');
    }
}
