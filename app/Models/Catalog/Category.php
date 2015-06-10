<?php

namespace BazaarCorner\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    public function getSubcategory($id)
    {
        return $this->where('parent_id', $id)->get();
    }
}
