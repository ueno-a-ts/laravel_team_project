<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



// Auth Route
Auth::routes();

// Items route
Route::get('/', 'ItemController@index');
Route::get('/items/{item}', 'ItemController@show');

// Cart route
Route::group(['middleware' => ['auth']], function () {
    Route::get('/mycart', 'CartController@myCart');
    Route::post('/items/mycart', 'CartController@addMycart');
    Route::post('/cartdelete','CartController@deleteCart');
    Route::post('/buy', 'CartController@buy');
});




//
Route::get('/home', 'HomeController@index')->name('home');

// Admin Route
Route::get('/admin', function(){
    return view('admin');
});

// admin items Route
Route::get('/admin/items', 'ItemController@adminIndex');
Route::get('/admin/items/create', 'ItemController@adminCreate');
Route::post('/admin/items', 'ItemController@adminStore');
Route::get('/admin/items/{item}', 'ItemController@adminShow')->name('admin.items.show');
Route::get('/admin/items/{item}/edit', 'ItemController@adminEdit');
Route::put('/admin/items/{item}', 'ItemController@adminUpdate');
Route::delete('/admin/items/{item}', 'ItemController@adminDestroy');

// admin users Route
Route::get('/admin/users', 'UserController@adminIndex');
Route::delete('/admin/users/{user}', 'UserController@adminDestroy');

Route::get('/auth/{user}/edit', 'UserController@showEdit')->name('edit');
Route::put('/auth/{user}/update', 'UserController@exeUpdate')->name('update');

