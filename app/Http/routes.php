<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PageController@index']);
Route::get('about-us/', ['as' => 'about', 'uses' => 'PageController@aboutUs']);
Route::get('contact-us/', ['as' => 'contact', 'uses' => 'PageController@contactUs']);
Route::get('get-help/', ['as' => 'help', 'uses' => 'PageController@getHelp']);
Route::get('privacy-policy/', ['as' => 'policy', 'uses' => 'PageController@privacyPolicy']);
Route::get('terms-and-condition/', ['as' => 'terms', 'uses'=> 'PageController@termsAndCondition']);
Route::get('shipping-and-returns/', ['as' => 'shipping', 'uses' => 'PageController@shippingAndReturns']);
Route::post('subscribe/', ['as' => 'subscription', 'uses' => 'PageController@subscribe']);

/**
 * 
 * Filter parameters would be the following:
 * 
 * ?sort-by=all         - Default
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounts  - %-off
 */
Route::get('shop-by/{category?}', ['as' => 'shops', 'uses' => 'ShopController@index']);


/**
 * Filter parameters would be the following:
 * 
 * @todo After Shops page implementation
 * 
 * ?sort-by=all         - Default
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounted  - %-off
 */
Route::get('/{user}', ['as' => 'profile', 'uses' => 'UserController@index']);


/**
 * @todo SERP implementation
 */
Route::get('item/info', ['as' => 'product-page', 'uses' => 'ProductDetailsController@index']);
Route::get('item/search', ['as' => 'serp', 'uses' => 'SearchController@index']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);