<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $guarded = ['id', 'created_at', 'updated_at', 'is_active'];
    
    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'merchant_id',
        'brand_id'
    ];    
    
    public function brand()
    {
        return $this->belongsTo('BazaarCorner\Models\Catalog\Brand', 'brand_id', 'id');
    }
}
