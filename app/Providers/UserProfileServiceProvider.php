<?php namespace BazaarCorner\Providers;

use Illuminate\Support\ServiceProvider;

class UserProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // User Details widget
        $this->getUserInfo();
        
        // User Rankings widget
        $this->countFollowers();
        $this->countItemsSold();
        $this->getRatings();
        
        //User Feedback widget
        $this->getFeedback();
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
     * Merchant page information
     */
    private final function getUserInfo()
    {
        view()->composer(
            'widget.user.details',
            'BazaarCorner\Http\Helpers\UserViewHelper@getInfo'
        );
    }
    
    /**
     * Count followers
     */
    private final function countFollowers()
    {
        view()->composer(
            'widget.user.rankings',
            'BazaarCorner\Http\Helpers\UserViewHelper@countFollowers'
        );
    }
    
    private final function countItemsSold()
    {
        view()->composer(
            'widget.user.rankings',
            'BazaarCorner\Http\Helpers\UserViewHelper@itemSold'
        );
    }
    
    private final function getRatings()
    {
        view()->composer(
            'widget.user.rankings',
            'BazaarCorner\Http\Helpers\UserViewHelper@getRatings'
        );
    }
    
    private final function getFeedback()
    {
        view()->composer(
            'widget.user.rankings',
            'BazaarCorner\Http\Helpers\UserViewHelper@getFeedback'
        );
    }
}
