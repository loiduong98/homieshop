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

Route::group(['prefix'=>'/'], function(){
	Route::get('','HomeController@getLayout');

	Route::get('category','HomeController@getCategory');

	Route::get('product-page','HomeController@getProductPage');

	Route::get('checkout','HomeController@getCheckOut');

	Route::get('cart','HomeController@getCart');

	Route::get('contact','HomeController@getContact');
});

Route::group(['prefix'=>'admin'], function(){
	
	Route::group(['prefix'=>'/'], function(){
		Route::get('','AdminController@getLayout');
	});

	Route::group(['prefix'=>'product'], function(){
		Route::get('/','ProductController@getList');

		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');

		Route::get('edit/{id_product}','ProductController@getEdit');
		Route::post('edit/{id_product}','ProductController@postEdit');

		Route::get('delete/{id_product}','ProductController@getDelete');
	});

	Route::group(['prefix'=>'type_products'], function(){
		Route::get('/','TypeProductController@getList');

		Route::get('add','TypeProductController@getAdd');
		Route::post('add','TypeProductController@postAdd');

		Route::get('edit/{id_typeproduct}','TypeProductController@getEdit');
		Route::post('edit/{id_typeproduct}','TypeProductController@postEdit');

		Route::get('delete/{id_typeproduct}','TypeProductController@getDelete');
	});

	Route::group(['prefix'=>'bill'], function(){
		Route::get('/','BillController@getList');

		Route::get('add','BillController@getAdd');
		Route::post('add','BillController@postAdd');

		Route::get('edit/{id_bills}','BillController@getEdit');
		Route::post('edit/{id_bills}','BillController@postEdit');

		Route::get('delete/{id_bills}','BillController@getDelete');
	});

	Route::group(['prefix'=>'news'], function(){
		Route::get('/','NewsController@getList');

		Route::get('add','NewsController@getAdd');
		Route::post('add','NewsController@postAdd');

		Route::get('edit/{id_news}','NewsController@getEdit');
		Route::post('edit/{id_news}','NewsController@postEdit');

		Route::get('delete/{id_news}','NewsController@getDelete');
	});
});