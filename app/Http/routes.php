<?php

Route::get('/', ['as' => 'home', 'uses' => 'Site\PageController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'Site\PageController@aboutUs']);
Route::get('help', ['as' => 'help', 'uses' => 'Site\PageController@getHelp']);
Route::get('policy', ['as' => 'policy', 'uses' => 'Site\PageController@privacyPolicy']);
Route::get('terms-and-condition', ['as' => 'terms', 'uses'=> 'Site\PageController@termsAndCondition']);
/**
 * @todo SERP implementation
 */
Route::get('item/search', ['as' => 'serp', 'uses' => 'Site\SearchController@index']);

/**
 * Must be authorized to navigate the following routes
 */
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('member/account', ['as' => 'profile', 'uses' => 'Auth\AuthController@viewAccount']);
    Route::post('member/{username}/edit', ['as' => 'profile.update', 'uses' => 'Auth\AuthController@edit']);
        
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
//Route::get('market', ['as'=>'market', 'uses'=> 'MarketController@index']);

//Route::get('wishlist', ['as'=>'wishlist', 'uses'=> 'WishlistController@index']);


//Route::controllers([
//    'member' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController'
//]);

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
 * @todo
 * 
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounts  - %-off
 */
Route::get('{category}/{subcategory}', ['as' => 'shops', 'uses' => 'Site\ShopController@index']);



