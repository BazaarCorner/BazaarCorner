<?php

namespace BazaarCorner\Http\Controllers\Site;

use BazaarCorner\Http\Controllers\Controller;
use BazaarCorner\Services\Catalog\ProductService;
use BazaarCorner\Services\Catalog\BrandService;
use BazaarCorner\Services\Merchant\MerchantService;
use BazaarCorner\Services\Order\PurchaseService;

class PageController extends Controller
{
    public function index(
        ProductService $product,
        BrandService $brand,
        MerchantService $merchant,
        PurchaseService $order
    ) {
        $this->data['filters'] = $this->getFilters();
        $this->data['new_items'] = $product->newlyAdded();
        $this->data['half_priced'] = $product->halfPriced();
        $this->data['top_brands'] = $brand->getBrands();
        $this->data['featured_merchants'] = $merchant->getFeaturedMerchants();
        $this->data['most_bought'] = $order->mostBought();
        
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