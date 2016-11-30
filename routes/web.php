<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => 'auth'], function () {

	Route::resource('category', 'CategoryController');
	Route::resource('post', 'PostController');
	Route::resource('comment', 'CommentController');
	Route::resource('tag', 'CommentController');
});

Route::get('/','FrontController@index');


Auth::routes();
Route::get('/home', 'HomeController@index');






















