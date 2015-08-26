<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// ===============================================================
Route::get('/', 'HomeController@showResume');

// ===============================================================

Route::get('/resume', 'HomeController@showResume');

// ===============================================================

Route::get('/portfolio', 'HomeController@showPortfolio');

// ===============================================================

Route::get('/sayhello/{name}', 'HomeController@sayHello');

// ===============================================================

Route::get('/rolldice/{guess}', 'HomeController@playDice');

// ===============================================================

Route::get('/hello-world', 'HomeController@showHello');

// ===============================================================

Route::get('/firstforms', 'HomeController@showFirstForm');

// ===============================================================

Route::get('/boxes', 'HomeController@showPositions');

// ===============================================================

Route::get('/pinkFloyd', 'HomeController@showFloydBox');

// ===============================================================

Route::resource('posts', 'PostsController');

// ===============================================================

Route::get('/calc', 'HomeController@showCalc');

// ===============================================================

Route::get('/maps', 'HomeController@showMaps');

// ===============================================================

Route::get('/simon', 'HomeController@playSimon');

// ===============================================================

Route::get('/whack', 'HomeController@playWhack');

// ===============================================================

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');


