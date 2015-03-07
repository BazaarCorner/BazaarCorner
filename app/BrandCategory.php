<?php namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    protected $table = 'brand_categories';
    
    protected function brand()
    {
        return $this->belongsTo('BazaarCorner\Brand', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo('BazaarCorner\Category', 'id');
    }
}
