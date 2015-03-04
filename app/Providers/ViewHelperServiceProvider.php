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
        $this->getUserInfo();
        $this->countFollowers();
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
            'layout.partial.head-menu',
            'BazaarCorner\Http\Helpers\MainMenuViewHelper@composeView'
        );
    }    
    
    private final function getRecentlyAddedProducts()
    {
        view()->composer(
            'layout.widget.recently-added-products',
            'BazaarCorner\Http\Helpers\ProductViewHelper@recentlyAdded'
        );
    }
    
    private final function getHalfPricedItems()
    {
        view()->composer(
            'layout.widget.half-price-tag',
            'BazaarCorner\Http\Helpers\ProductViewHelper@halfPriced'
        );
    }
    
    private final function getFeaturedMerchants()
    {
        view()->composer(
            'layout.widget.featured-merchants',
            'BazaarCorner\Http\Helpers\MerchantViewHelper@composeView'
        );
    }
    
    /**
     * Merchant page information
     */
    private final function getUserInfo()
    {
        view()->composer(
            'layout.widget.user-details',
            'BazaarCorner\Http\Helpers\UserViewHelper@getInfo'
        );
    }
    
    /**
     * Count followers
     */
    private final function countFollowers()
    {
        view()->composer(
            'layout.widget.user-rankings',
            'BazaarCorner\Http\Helpers\UserViewHelper@countFollowers'
        );
    }
}
