<?php

namespace BazaarCorner\Services\Catalog;

use BazaarCorner\Models\Catalog\Product;
use BazaarCorner\Models\Catalog\Brand;

class ProductService
{
    CONST RESULT_PER_PAGE = 12;
    
    private $product;    
    
    public function __construct(Product $product, Brand $brand)
    {
        $this->product = $product;
        $this->brand =  $brand;
    }
    
    public function newlyAdded()
    {
        return $this->product
            //->where()
            ->paginate(self::RESULT_PER_PAGE);
    }
    
    public function halfPriced()
    {
        return $this->product
//            ->where('is_active', true)
            ->get();
    }
    
    public function merchantProducts($id)
    {
        return $this->product
            ->where('merchant_id', $id)
            ->paginate(self::RESULT_PER_PAGE);
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
        
        
        $brand = $this->brand->where("name", 'like', '%'.$query.'%');
        if ($brand->count() > 0) {
            return $this->product
                ->where('brand_id', $brand->first()->id)
                ->paginate(self::RESULT_PER_PAGE);
        }
        
        $product = $this->product->where("name", 'like',  '%'.$query.'%');
        if ($product->count() > 0) {
            return $product->paginate(self::RESULT_PER_PAGE);
        }
        
        $product = $this->product->where("sku", 'like', '%'.$query.'%');
        if ($product->count() > 0) {
            return $product->paginate(self::RESULT_PER_PAGE);
        }
        
        // Return empty array if no available
        return [];
    }
    
    public function getProductsByCategory($subcat_id)
    {
        return $this->product->with('category')
            ->join('item_categories','id','=','item_categories.item_id')
            ->where('category_id', $subcat_id)
            ->paginate(self::RESULT_PER_PAGE);
    }
}
