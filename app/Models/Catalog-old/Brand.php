<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active',
    ];    
}
