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
        $this->getAvailableShops();
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
    private final function getAvailableShops()
    {
        view()->composer(
            'layout.widgets.store-menu',
            'BazaarCorner\Http\Helpers\MainMenuViewHelper@composeView'
        );
    }
}
