<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'items';
    
    protected $guarded = ['id', 'created_at', 'updated_at', 'is_active', 'sku'];
    
    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'price',
        'merchant_id',
        'brand_id'
    ];
    
    public function brand()
    {
        return $this->belongsTo('BazaarCorner\Models\Catalog\Brand');
    }
    
    public function images()
    {
        return $this->morphMany('BazaarCorner\Models\Catalog\ProductImage', 'imageable');
    }
    
    public function category()
    {
        return $this->hasMany('BazaarCorner\Models\Catalog\ProductCategory', 'item_id', 'id');
    }
}
