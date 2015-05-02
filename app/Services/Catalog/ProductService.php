<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Product;
use BazaarCorner\Models\Catalog\Brand;

class ProductService
{
    private $product;
    
    public function __construct(Product $product, Brand $brand)
    {
        $this->product = $product;
        $this->brand =  $brand;
    }
    
    public function newlyAdded()
    {
        return $this->product->get();
    }
    
    public function halfPriced()
    {
        return $this->product->where('is_active', true)->get();
    }
    
    public function merchantProducts($id)
    {
        return $this->product->where('merchant_id', $id)->get();
    }
    
    
    /**
     * Search order
     * 1. Category
     * 2. Subcategory
     * 3. Brand
     * 4. Product Name
     * 5. Product sku
     * 
     * @param string $query
     * @return Array
     */
    public function search($query)
    {
        //Category search here
        
        
        $brand = $this->brand->where("name", $query);
        if ($brand->count() > 0) {
            return $this->product->where('brand_id', $brand->first()->id)->get();
        }
        
        $product = $this->product->where("name", $query);
        if ($product->count() > 0) {
            return $product->get();
        }
        
        $product = $this->product->where("sku", $query);
        if ($product->count() > 0) {
            return $product->get();
        }
        
        // Return empty array if no available
        return [];
    }
}
