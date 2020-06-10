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


Route::get('/','HomeController@getLayout');

Route::get('/category','HomeController@getCategory');

Route::get('/product-page','HomeController@getProductPage');

Route::get('/checkout','HomeController@getCheckOut');

Route::get('/cart','HomeController@getCart');

