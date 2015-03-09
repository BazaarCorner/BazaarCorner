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

Route::get('/', 'PageController@index');
Route::get('about-us', 'PageController@aboutUs');
Route::get('contact-us', 'PageController@contactUs');
Route::get('get-help', 'PageController@getHelp');
Route::get('privacy-policy', 'PageController@privacyPolicy');
Route::get('terms-and-condition', 'PageController@termsAndCondition');
Route::get('shipping-and-returns', 'PageController@shippingAndReturns');
Route::post('subscribe', 'PageController@subscribe');

/**
 * Filter parameters would be the following:
 * 
 * ?sort-by=all         - Default
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounted  - %-off
 */
Route::get('/{username}', 'UserController@index');

/**
 * @todo After User page implementation
 * 
 * Filter parameters would be the following:
 * 
 * ?sort-by=all         - Default
 * ?sort-by=popularity  - Popular/Most Liked/With good feedback
 * ?sort-by=most-recent - Newly added products
 * ?sort-by=most-bought - Popular/Most Ordered
 * ?sort-by=discounts  - %-off
 */
Route::get('/shop-by/{category}', 'ShopController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

/**
 * @todo SERP implementation
 */
Route::get('/item/info', 'ProductDetailsController@index');
Route::get('/item/search', 'SearchController@index');