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

    /**
     * @deprecated since version 1.x
     */
    protected final function setRedirectPath($path)
    {
        $this->redirectPath = $path;
    }
}
