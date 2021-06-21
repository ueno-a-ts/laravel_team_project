<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Items route
Route::get('/', 'ItemController@index');
Route::get('/items/{item}', 'ItemController@show');

// Admin Route
Route::get('/admin', function(){
    return view('admin');
});


Route::get('/admin/items', 'ItemController@adminIndex');
Route::get('/admin/items/{item}', 'ItemController@adminShow');
Route::get('/admin/items/create', 'ItemController@adminCreate');
Route::get('/admin/items', 'ItemController@adminsStore');
Route::get('/admin/items/{item}/edit', 'ItemController@adminEdit');
Route::get('/admin/items/{item}', 'ItemController@adminUpdate');
Route::get('/admin/items/{item}', 'ItemController@adminDestroy');
