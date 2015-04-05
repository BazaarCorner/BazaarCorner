<?php

namespace BazaarCorner\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

abstract class Controller extends BaseController
{
    // Traits
    use DispatchesCommands;
    use ValidatesRequests;
    
    /**
     * Page view data container
     * 
     * @var Array
     */
    protected $data;
    
    /**
     * @var Illuminate\Http\Request
     */
    protected $request;
    
    /**
     * Initialize Request object and data container.
     * 
     * IMPORTANT: This method IS REQUIRED in every concrete implementation
     * 
     * @param Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->data = [];
    }
    
//    abstract protected function getPageFilters();
    
    
    protected function getFilters()
    {
        $sort_by = $this->request->has('sort-by');
        
        if (!$param = $this->request->has('sort-by')) {
            $sort_by = 'all';
        } else {
            $sort_by = strtolower($this->request->get('sort-by'));
        }
        
        switch ($sort_by) {
            case 'all':
            case 'popularity':
//            case 'most-recent':
            case 'most-bought':
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
            [
                'active' => ($sort_by === 'popularity')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=popularity',
                'name'      => 'Popularity'
            ],
//            [
//                'active' => ($sort_by === 'most-recent')? true : false,
//                'url'   => $this->request->getPathInfo().'?sort-by=most-recent',
//                'name'      => 'Most Recent'
//            ],
            [
                'active' => ($sort_by === 'most-bought')? true : false,
                'url'   => $this->request->getPathInfo().'?sort-by=most-bought',
                'name'      => 'Most Bought'
            ],
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

    /**
     * @deprecated since version 1.x
     */
//    protected final function setRedirectPath($path)
//    {
//        $this->redirectPath = $path;
//    }
}
