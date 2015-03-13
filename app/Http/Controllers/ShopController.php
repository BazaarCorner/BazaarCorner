<?php

namespace BazaarCorner\Http\Controllers;

use Illuminate\Http\Request;
use BazaarCorner\BazaarCategory;

class ShopController extends Controller
{
    /**
     * THIS METHOD IS REQUIRED, DO NOT REMOVE.
     * 
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }
    
    public function index($category = '')
    {
        $this->data['filters']  = $this->filters();
        $this->data['store_categories'] = $this->getCategories($category);
        
        return view('site.store', $this->data);
    }
    
    /**
     * Get available categories by selected shop
     * 
     * @param string $category
     * @return array
     */
    private function getCategories($category)
    {
        $shop = BazaarCategory::where('is_active', true);
        
        if (empty($category)) {
            
            $stores = [];
            // Fetch all shop categories
            foreach ($shop->get() as $store) {
                $stores[] = $store;
            }
            return $stores;
        }
        
        return [$shop->where('slug',"{$category}")->first()];
    }
    
    
    private function filters()
    {
        if (!$param = $this->request->has('sort-by')) {
            $sort_by = 'all';
        } else {
            $sort_by = strtolower($this->request->get('sort-by'));
        }        
        
        switch ($sort_by) {
            case 'all':
//            case 'popularity':
            case 'most-recent':
//            case 'most-bought':
//            case 'discounts':
                //DO NOTHING
                break;
            default :
                // Invalid request
                abort(404);
        }        
        
        $filters = [
            [
                'active'    => ($sort_by === 'all')? true : false,
                'url'       => $this->request->getPathInfo().'?sort-by=all',
                'name'      => 'All'
            ],
//            [
//                'active' => ($sort_by === 'popularity')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=popularity',
//                'name'      => 'Popularity'
//            ],
            [
                'active' => ($sort_by === 'most-recent')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=most-recent',
                'name'      => 'Most Recent'
            ],
//            [
//                'active' => ($sort_by === 'most-bought')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=most-bought',
//                'name'      => 'Most Bought'
//            ],
//            [
//                'active' => ($sort_by === 'discounts')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=discounts',
//                'name'      => 'Discounts'
//            ],
        ];
        
//        $profile = $this->getUser();
//                
//        if ($profile instanceof Merchant) {
//            
//            
//        } elseif ($profile instanceof User) {
//            
//        }
        
        return $filters;
    }
}
