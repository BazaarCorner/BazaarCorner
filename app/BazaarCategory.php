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
        $categories = $this->hasMany('BazaarCorner\ShoppingCategory')
            ->where('is_active', true);
        
        foreach($categories as $category) {
            var_dump($category); exit;
        }        
        
        $main = $categories->mainCategories();
        
        var_dump($main); exit;
        
        return $this->hasMany('BazaarCorner\ShoppingCategory')
            ->where('is_active', true)->get();
    }
}