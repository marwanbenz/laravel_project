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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::resource('admin/posts', 'Admin\\PostsController');


// user index
Route::get('/users', 'UserController@index');

// user create 
Route::get('/users/create', 'UserController@create');

Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');

// user store 
Route::post('/users/create', 'UserController@store');

Route::post('/users/{user}/update', 'UserController@store')->name('users.update');

// employer index
Route::get('/employer', 'EmployersController@index');

// employer create 
Route::get('/employer/create', 'EmployersController@create');

// employer store 
Route::post('/employer/create', 'EmployersController@store');

// Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');