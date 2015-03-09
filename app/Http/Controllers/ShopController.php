<?php

namespace BazaarCorner\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function index()
    {
        $this->data['filters']  = $this->filters();
        
        return view('shop.index', $this->data);
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
            case 'popularity':
            case 'most-recent':
            case 'most-bought':
            case 'discounts':
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
            [
                'active' => ($sort_by === 'popularity')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=popularity',
                'name'      => 'Popularity'
            ],
            [
                'active' => ($sort_by === 'most-recent')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=most-recent',
                'name'      => 'Most Recent'
            ],
            [
                'active' => ($sort_by === 'most-bought')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=most-bought',
                'name'      => 'Most Bought'
            ],
            [
                'active' => ($sort_by === 'discounts')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=discounts',
                'name'      => 'Discounts'
            ],
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
