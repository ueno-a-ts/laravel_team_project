<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




// Items route
Route::get('/', 'ItemController@index');
Route::get('/items/{item}', 'ItemController@show');

// Cart route
Route::get('/mycart', 'CartController@myCart')->middleware('auth');
Route::post('/items/mycart', 'CartController@addMycart');
Route::post('/cartdelete','CartController@deleteCart');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Admin Route
Route::get('/admin', function(){
    return view('admin');
});

Route::get('/admin/items', 'ItemController@adminIndex');
Route::get('/admin/items/create', 'ItemController@adminCreate');
Route::post('/admin/items', 'ItemController@adminStore');
Route::get('/admin/items/{item}', 'ItemController@adminShow')->name('admin.items.show');
Route::get('/admin/items/{item}/edit', 'ItemController@adminEdit');
Route::put('/admin/items/{item}', 'ItemController@adminUpdate');
Route::delete('/admin/items/{item}', 'ItemController@adminDestroy');
