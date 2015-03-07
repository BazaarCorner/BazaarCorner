<?php

namespace BazaarCorner\Providers;

use Illuminate\Support\ServiceProvider;

class ViewHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getMainMenu();
        $this->getRecentlyAddedProducts();
        $this->getHalfPricedItems();
        $this->getFeaturedMerchants();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    /**
     * Get top level Categories as main menu
     */
    private final function getMainMenu()
    {
        view()->composer(
            'widget.navigation.header.menu',
            'BazaarCorner\Http\Helpers\MainMenuViewHelper@composeView'
        );
    }    
    
    private final function getRecentlyAddedProducts()
    {
        view()->composer(
            'widget.item.recently-added',
            'BazaarCorner\Http\Helpers\ProductViewHelper@recentlyAdded'
        );
    }
    
    private final function getHalfPricedItems()
    {
        view()->composer(
            'widget.item.half-price-tag',
            'BazaarCorner\Http\Helpers\ProductViewHelper@halfPriced'
        );
    }
    
    private final function getFeaturedMerchants()
    {
        view()->composer(
            'widget.merchant.featured',
            'BazaarCorner\Http\Helpers\MerchantViewHelper@composeView'
        );
    }
}
