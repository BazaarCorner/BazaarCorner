<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class MerchantFeedback extends Model
{
    protected $table = "merchant_feedbacks";
    
    protected $fillable = ['merchant_id'];
    
    public function getFeedbacks()
    {
        return [];
    }
}
