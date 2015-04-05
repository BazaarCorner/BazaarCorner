<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

/**
 * Main Category
 */
class ShoppingCategory extends Model
{
    protected $table = 'shopping_categories';
    
    public function bazaarCategory()
    {
        return $this->belongsToMany('BazzarCorner\BazaarCategory');
    }
    
    public function mainCategory()
    {
        return $this->hasMany('BazaarCorner\MainCategory')
            ->where('is_active', true)->get();
    }
}
