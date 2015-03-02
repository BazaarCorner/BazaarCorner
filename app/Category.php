<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';
    
    public function getParentCategory()
    {
        $categories = DB::select(
            "SELECT * "
            . "FROM {$this->table} "
            . "WHERE "
                . "is_active = 1 "
                . "AND parent_id IS NULL "
        );
            
        foreach ($categories AS $category) {
            $category->slug = strtolower(str_replace(" ", "-", $category->name));
            $main []= $category;
        }

        return $main;
    }
}
