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

Route::get('/', function() {
    return view('welcome');
});

/**
 *  Route::get('url_extension', 'ControllerName@methodName');
 **/

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');



// Articles

Route::get('articles', 'ArticlesController@index');

Route::get('articles/{id}', 'ArticlesController@show');








/**
 *  This is another way to register a route
 *      - useful for small quick things
 *      - convenient for APIs
 *  Above approach is the preferred method of registering a route
 **/
//Route::get('foo', function() {
//    return 'Bar';
//});