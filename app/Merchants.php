<?php

namespace BazaarCorner;

class Merchants
{
    protected $table = 'merchants';
    
    private $merchants;
    
    public function getCurrentFeatured($limit = 0)
    {
        $this->merchants = [
            [
                'name' => 'HeartStrings',
                'discount' => 60,
                'logo' => 'img/featured_merchant/hearstrings.jpg',
                'shipping' => 'PH Nationwide'
            ],
            [
                'name' => 'JetSetter',
                'discount' => 50,
                'logo' => 'img/featured_merchant/jet-setter.jpg',
                'shipping' => 'PH Nationwide'
            ],
            [
                'name' => 'Zico',
                'discount' => 70,
                'logo' => 'img/featured_merchant/zico.jpg',
                'shipping' => 'PH Nationwide'
            ],
        ];
        
        return $this->merchants;
    }
        
    public function getInfo($name)
    {
        return DB::table($this->table)
            ->where('name','=', $name)
            ->get();
    }
}
