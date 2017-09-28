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
Route::prefix('user')->group(function(){
	Route::get('/', 'UserController@user')->name('user');
    Route::get('/vehicle/{group_name}', 'UserController@showvehicle')->name('showvehicle');
    Route::get('/vehicle/transfer/{id}', 'UserController@showtransfer')->name('showtransfer');

	Route::get('/group', 'UserController@showgroup')->name('showgroup');
	Route::get('/group/groupvehicle/{group_name}', 'UserController@groupvehicle')->name('groupvehicle');
	
	Route::put('/vehicle/transfered/{id}', 'UserController@transfer')->name('transfer');

	// Route logout user
	Route::get('/logout', 'Auth\LoginController@userlogout')->name('userlogout');

});

// Routes to display admin pages after logged in
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('login.submit');

    Route::get('/', 'AdminController@index')->name('admin.panel');

    Route::get('/showapprove', 'AdminController@showapprove')->name('showapprove');
    Route::get('/showassign', 'AdminController@showassign')->name('showassign');
    Route::get('/assign/{id}', 'AdminController@assign')->name('assign');
    Route::put('/assign_to/{id}', 'AdminController@assign_to')->name('assign_to');


    // Manage users routes
    Route::get('/users', 'AdminController@showusers')->name('showusers');
    Route::get('/adduser', 'AdminController@adduser')->name('showadduser');
    Route::post('/insertuser', 'AdminController@insertuser')->name('insertuser');
    Route::get('/edituser/{id}', 'AdminController@edituser')->name('edituser');
    Route::put('/updateuser/{id}', 'AdminController@updateuser')->name('updateuser');
    Route::delete('/deleteuser/{id}', 'AdminController@destroyuser')->name('deleteuser');


 
     
     // Manage vehicle routes
    Route::get('/vehicle', 'AdminController@viewvehicle')->name('viewvehicle');
    Route::get('/addvehicle', 'AdminController@addvehicle')->name('showaddvehicle');
    Route::post('/insert', 'AdminController@insert')->name('insertvehicle');
    Route::get('/searchvehicle', 'AdminController@searchvehicle')->name('searchvehicle');
    Route::get('/edit/{id}', 'AdminController@edit')->name('editvehicle');
    Route::put('/update/{id}', 'AdminController@update')->name('updatevehicle');
    Route::delete('/delete/{id}', 'AdminController@destroy')->name('delete');



    // Manage group routes
    Route::get('/group', 'AdminController@viewgroup')->name('viewgroup');
    Route::get('/addgroup', 'AdminController@addgroupform')->name('showaddgroup');
    Route::post('/insertgroup', 'AdminController@insertgroup')->name('insertgroup');
    Route::get('/editgroup/{id}', 'AdminController@editgroup')->name('editgroup');
    Route::put('/updategroup/{id}', 'AdminController@updategroup')->name('updategroup');
    Route::delete('/deletegroup/{id}', 'AdminController@destroygroup')->name('deletegroup');


    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('adminlogout');

});

