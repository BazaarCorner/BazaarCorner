<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    
    public function categories()
    {
        return $this->hasMany('BazaarCorner\BrandCategory', 'brand_id');
    }
}