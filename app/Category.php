<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    /**
     * @uses Query Scope - To append additional query logic
     * @see http://laravel.com/docs/5.0/eloquent#query-scopes
     * @param Query Scope $query
     */
    public final function scopeParentCategory($query)
    {
        $query->where('is_active', '=', '1')->whereNull('parent_id');
    }
    
    public function brand()
    {
        return $this->hasMany('BazaarCorner\BrandCategory', 'category_id');
    }
}
