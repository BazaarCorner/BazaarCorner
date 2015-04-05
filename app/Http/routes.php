<?php

Route::get('/', ['as' => 'home', 'uses' => 'Site\PageController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'Site\PageController@aboutUs']);
Route::get('help', ['as' => 'help', 'uses' => 'Site\PageController@getHelp']);
Route::get('policy', ['as' => 'policy', 'uses' => 'Site\PageController@privacyPolicy']);
Route::get('terms-and-condition', ['as' => 'terms', 'uses'=> 'Site\PageController@termsAndCondition']);
Route::get('item/search', ['as' => 'serp', 'uses' => 'Site\SearchController@index']);

/**
 * Must be authorized to navigate the following routes
 */
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('member/account', ['as' => 'profile', 'uses' => 'Auth\AuthController@viewAccount']);
    
    Route::group(['prefix'=> 'member/catalog'], function() {
        Route::get('/', ['as' => 'catalog-dashboard', 'uses'=> 'Catalog\DashboardController@index']);
        Route::resource('product', 'Catalog\ProductController');
        Route::resource('brand', 'Catalog\BrandController');
        Route::resource('category', 'Catalog\CategoryController');
    });
    
    //CHECKOUT
});

Route::group(['middleware' => 'guest'], function() {
    //LOGIN and REGISTRATION
});

Route::post('subscribe', ['as' => 'subscription', 'uses' => 'Site\SubscriptionController@subscribe']);

/**
 * Basket
 */
//Route::get('basket', ['as' => 'basket', 'uses' => 'BasketController@index']);
//Route::get('checkout', ['as' => 'checkout', 'uses' => 'CheckoutController@index']);


/**
 * Market place
 */
Route::get('market', ['as'=>'market', 'uses'=> 'MarketController@index']);

//Route::get('wishlist', ['as'=>'wishlist', 'uses'=> 'WishlistController@index']);

/**
 * @todo SERP implementation
 */
Route::get('item/info', ['as' => 'product-page', 'uses' => 'ProductDetailsController@index']);


Route::controllers([
    'member' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

/**
 * Filter parameters would be the following:
 * 
 * @todo After Shops page implementation
 * 
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounted  - %-off
 */
Route::get('{username}', ['as' => 'member', 'uses' => 'Membership\PageController@show']);

/**
 * 
 * Filter parameters would be the following:
 * 
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounts  - %-off
 */
Route::get('{category}/{subcategory}', ['as' => 'shops', 'uses' => 'Site\ShopController@index']);