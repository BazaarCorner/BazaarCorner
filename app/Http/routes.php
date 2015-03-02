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
Route::get('/about-us', 'PageController@aboutUs');
Route::get('/contact-us', 'PageController@contactUs');
Route::get('/get-help', 'PageController@getHelp');
Route::get('privacy-policy', 'PageController@privacyPolicy');
Route::get('terms-and-condition', 'PageController@termsAndCondition');
Route::get('shipping-and-returns', 'PageController@shippingAndReturns');
