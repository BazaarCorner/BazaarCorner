<?php

namespace BazaarCorner\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('site.index');
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
