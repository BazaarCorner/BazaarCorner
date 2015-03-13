<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

/**
 * Stores
 * 
 * @internal Used for BazaarManager
 */
class BazaarCategory extends Model
{
    protected $table = 'bazaar_categories';
    
    /**
     * Available shopping categories
     */
    public function shoppingCategory()
    {
        return $this->hasMany('BazaarCorner\ShoppingCategory')
            ->where('is_active', true)->get();
    }
}