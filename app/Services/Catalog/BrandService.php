<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Brand;

class BrandService
{
    private $brand;
    
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }    
    
    public function getBrands()
    {
        return $this->brand->all()->random(10);
    }
}
