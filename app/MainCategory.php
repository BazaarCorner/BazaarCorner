<?php

namespace BazaarCorner;

use Illuminate\Database\Eloquent\Model;

//has many categories
//belongs to Store (BazaarCategory) Category
class MainCategory extends Model
{
    protected $table = 'main_categories';
}
