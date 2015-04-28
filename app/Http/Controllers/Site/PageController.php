<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Services\Catalog\ProductService;

class PageController extends Controller
{
    public function index(ProductService $product)
    {
        $this->data['filters'] = $this->getFilters();
        $this->data['new_items'] = $product->newlyAdded();
        $this->data['half_priced'] = $product->halfPriced();
        
        return view('site.index', $this->data);
    }
    
    public function aboutUs()
    {
        return view('site.about-us');
    }
    
    public function contactUs()
    {
        return view('site.contact-us');
    }
    
    public function getHelp()
    {
        return view('site.get-help');
    }
    
    public function privacyPolicy()
    {
        return view('site.privacy-policy');
    }
    
    public function termsAndCondition()
    {
        return view('site.terms-and-condition');
    }
    
    public function shippingAndReturns()
    {
        return view('site.shipping-and-returns');
    }
}