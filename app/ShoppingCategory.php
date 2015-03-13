<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

/**
 * Main Category
 */
class ShoppingCategory extends Model
{
    protected $table = 'shopping_categories';
    
    public function bazaarCategory()
    {
        return $this->belongsTo('BazzarCorner\BazaarCategory');
    }
}
