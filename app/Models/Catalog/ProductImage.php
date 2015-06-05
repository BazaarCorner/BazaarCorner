<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

/**
 * @todo for discussion
 */
class ProductImage extends Model
{
    protected $table = 'images';
    
    public function imageable()
    {
        return $this->morphTo();
    }
}
