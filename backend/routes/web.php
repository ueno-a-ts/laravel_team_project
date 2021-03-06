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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/top', 'ItemController@topIndex');
Route::get('/user/{user}/edit', 'UserController@userEdit');
Route::put('/user/{user}/update', 'UserController@userUpdate');


// Items route
Route::get('/', 'ItemController@index');
Route::get('/items/search', 'ItemController@itemSearch');
Route::get('/items/{item}', 'ItemController@show');

// Cart route
Route::group(['middleware' => ['auth']], function () {
    Route::get('/mycart', 'CartController@myCart');
    Route::post('/items/mycart', 'CartController@addMycart');
    Route::post('/cartdelete','CartController@deleteCart');
    Route::post('/buy', 'CartController@buy');
});


Route::group(['middleware' => ['auth']], function () {
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
    Route::put('/admin/users/{user}', 'UserController@adminUpdate');
    Route::delete('/admin/users/{user}', 'UserController@adminDestroy');
});

// cart Route
Route::get('/cart', function(){
    return view('cart.cart');
});
Route::get('/thankyou', function(){
    return view('cart.thankyou');
});
