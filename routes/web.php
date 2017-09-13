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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', 'HomeController@home')->name('homepage');
Route::get('/user', 'HomeController@user')->name('user');
Route::get('/user/logout', 'Auth\LoginController@userlogout')->name('userlogout');


Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('login.submit');
    Route::get('/', 'AdminController@index')->name('admin.panel');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('adminlogout');

    Route::get('/test', 'AdminController@test')->name('admin.test');
    Route::get('/test2', 'AdminController@test2')->name('admin.test2');
});

