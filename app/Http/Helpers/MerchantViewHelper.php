<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Merchant;

class MerchantViewHelper implements ViewHelperAwareInterface
{
    protected $merchant;
    
    public function __construct(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }
    
    public function composeView(View $view)
    {
        $view->with("merchants", $this->merchant->getCurrentFeatured());
    }
}
