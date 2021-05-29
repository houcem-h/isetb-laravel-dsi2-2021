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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // admin middleware route group
    Route::middleware('admin')->namespace('Admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::resource('customers', 'CustomerController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
        Route::resource('users', 'UserController');
        Route::resource('orders', 'OrderController');
    });
});
