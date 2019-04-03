<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// //Authentication Routes
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getlogout');
//
//
// //Registration Routes
// Route::get('auth/Register', 'Auth\AuthControlloer@getRegister');
// Route::Post('auth/Register', 'Auth\AuthControlloer@PostRegister');


// Route::get('blog/{slug}', ['as'=>'blog.single', 'uses' => 'BlogController@getSingle']);
Route::get('blog/{slug}', 'BlogController@getSingle')->where('slug', '[\w\d\-\_]+')->name('blog.single');
Route::get('blog', 'BlogController@getIndex')->name('blog.index');
Route::get('/', 'PageController@getIndex');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::resource('/posts', 'PostController');
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
