<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;
use BazaarCorner\Merchant;

class MerchantViewHelper implements ViewHelperAwareInterface
{
    /**
     * @var BazaarCorner\Merchant
     */
    protected $merchant;
    
    /**
     * @param Merchant $merchant
     */
    public function __construct(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }
    
    /**
     * @param View $view
     */
    public function composeView(View $view)
    {
        $view->with("merchants", $this->merchant->fetured());
    }
}
