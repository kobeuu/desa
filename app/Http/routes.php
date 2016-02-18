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
/* Home page */
Route::get('/', 'AdminController@index');

/* Dashboard */
Route::get('dashboard', 'AdminController@index');
Route::get('dashboard/articles', 'AdminController@articles');
Route::get('dashboard/messages', 'AdminController@messages');
Route::get('dashboard/users', 'AdminController@users');
Route::get('dashboard/sliders', 'SlidersController@index');
Route::get('dashboard/images', 'ImagesController@create');
Route::get('dashboard/registrants', 'AdminController@registrants');
Route::get('dashboard/profil', 'UsersController@show');
Route::get('dashboard/news', 'AdminController@news');

/* Users*/
Route::resource('users', 'UsersController');

/* Auth */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
