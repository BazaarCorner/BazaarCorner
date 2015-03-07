<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class MerchantFollower extends Model
{
    protected $table = 'merchant_followers';
    
    protected $fillable = ['user_id', 'follower_id'];
    
    public function merchant()
    {
        return $this->belongsTo('BazaarCorner\Merchant', 'user_id', 'id');
    }
}
