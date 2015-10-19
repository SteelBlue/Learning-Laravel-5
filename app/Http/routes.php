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

//Route::get('/', function() {
//    return view('welcome');
//});

/**
 *  Route::get('url_extension', 'ControllerName@methodName');
 **/



/**
 * Pages
 **/
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');



/**
 * Articles
 **/
// Manual Way to Set-Up Routes
    //Route::get('articles', 'ArticlesController@index');
    //Route::get('articles/create', 'ArticlesController@create');
    //Route::get('articles/{id}', 'ArticlesController@show'); // always put wild card {} urls last
    //Route::post('articles', 'ArticlesController@store'); // Respond to POST Request
    //Route::get('articles/{id}/edit', 'ArticlesController@edit');
// Using Route Resource
Route::resource('articles', 'ArticlesController');




/**
 * Auth
 **/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




/**
 * Example Use of Custom Route Middleware
 **/
Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);


/**
 *  This is another way to register a route
 *      - useful for small quick things
 *      - convenient for APIs
 *  Above approach is the preferred method of registering a route
 **/
//Route::get('foo', function() {
//    return 'Bar';
//});