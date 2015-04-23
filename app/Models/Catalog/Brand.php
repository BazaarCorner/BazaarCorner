<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    
    protected $guarded = ['id', 'created_at', 'updated_at', 'is_active'];

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
//        'is_active',
    ];
}
