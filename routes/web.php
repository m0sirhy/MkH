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

Route::get('/', function () {
    return view('user_side.index');
});
Route::get('/', 'ProductController@index');

//This tow routes for testing purpose
Route::get('/temp_login', function () {
    return view('user_side.account.login');
});

Route::get('/temp_register', function () {
    return view('user_side.account.register');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('user','UserController');

Route::resource('product','ProductController');
Route::resource('category','CategoryController');
Route::resource('tag','TagController');
Route::resource('favorite','favoriteController');



