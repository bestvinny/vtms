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

// Route to display homepage
Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes();

// Routes to display user pages after logged in
Route::get('/user', 'UserController@user')->name('user');
Route::get('/user/vehicle', 'UserController@showvehicle')->name('showvehicle');

// Route logout user
Route::get('/user/logout', 'Auth\LoginController@userlogout')->name('userlogout');

// Routes to display admin pages after logged in
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('login.submit');

    Route::get('/', 'AdminController@index')->name('admin.panel');
    Route::get('/vehicle', 'AdminController@viewvehicle')->name('viewvehicle');
    Route::get('/users', 'AdminController@showusers')->name('showusers');

    // Add users routes
    Route::get('/users/adduser', 'AdminController@adduser')->name('adduser');
    Route::get('/approve', 'AdminController@approve')->name('approve');
    Route::get('/assign', 'AdminController@assign')->name('assign');
     
     // Add vehicle routes
    Route::get('/addvehicle', 'AdminController@addvehicle')->name('showaddvehicle');
    Route::post('/insert', 'AdminController@insert')->name('insertvehicle');
    Route::get('/edit/{id}', 'AdminController@edit')->name('editvehicle');
    Route::put('/update/{id}', 'AdminController@update')->name('updatevehicle');
    Route::delete('/delete/{id}', 'AdminController@destroy')->name('delete');


    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('adminlogout');

});

