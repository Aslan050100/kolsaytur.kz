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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	//Product
	Route::get('product',['as'=>'product','uses'=>'ProductController@index']);
	Route::get('productCreate',['as'=>'product.create','uses'=>'ProductController@create']);
	Route::match(['get','post'],'productDestroy/{id}',['as'=>'product.destroy','uses'=>'ProductController@destroy']);
	Route::get('productEdit/{id}',['as'=>'product.edit','uses'=>'ProductController@edit']);
	Route::post('productStore',['as'=>'product.store','uses'=>'ProductController@store']);
	Route::match(['post','get'],'productUpdate/{id}',['as'=>'product.update','uses'=>'ProductController@update']);
	//city
	Route::get('city',['as'=>'city','uses'=>'CityController@index']);
	Route::get('cityCreate',['as'=>'city.create','uses'=>'CityController@create']);
	Route::match(['get','post'],'cityDestroy/{id}',['as'=>'city.destroy','uses'=>'CityController@destroy']);
	Route::get('cityEdit/{id}',['as'=>'city.edit','uses'=>'CityController@edit']);
	Route::post('cityStore',['as'=>'city.store','uses'=>'CityController@store']);
	Route::match(['post','get'],'cityUpdate/{id}',['as'=>'city.update','uses'=>'CityController@update']);
	//Comfort
	Route::get('comfort',['as'=>'comfort','uses'=>'ComfortController@index']);
	Route::get('comfortCreate',['as'=>'comfort.create','uses'=>'ComfortController@create']);
	Route::match(['get','post'],'comfortDestroy/{id}',['as'=>'comfort.destroy','uses'=>'ComfortController@destroy']);
	Route::get('comfortEdit/{id}',['as'=>'comfort.edit','uses'=>'ComfortController@edit']);
	Route::post('comfortStore',['as'=>'comfort.store','uses'=>'ComfortController@store']);
	Route::match(['post','get'],'comfortUpdate/{id}',['as'=>'comfort.update','uses'=>'ComfortController@update']);
	//Order
	Route::get('order',['as'=>'order','uses'=>'OrderController@index']);
	Route::match(['get','post'],'orderDestroy/{id}',['as'=>'order.destroy','uses'=>'OrderController@destroy']);
	//Product type
	Route::get('product_type',['as'=>'product_type','uses'=>'ProductTypeController@index']);
	Route::get('product_typeCreate',['as'=>'product_type.create','uses'=>'ProductTypeController@create']);
	Route::match(['get','post'],'product_typeDestroy/{id}',['as'=>'product_type.destroy','uses'=>'ProductTypeController@destroy']);
	Route::get('product_typeEdit/{id}',['as'=>'product_type.edit','uses'=>'ProductTypeController@edit']);
	Route::post('product_typeStore',['as'=>'product_type.store','uses'=>'ProductTypeController@store']);
	Route::match(['post','get'],'product_typeUpdate/{id}',['as'=>'product_type.update','uses'=>'ProductTypeController@update']);
	//Room
	Route::get('room',['as'=>'room','uses'=>'RoomController@index']);
	Route::get('roomCreate',['as'=>'room.create','uses'=>'RoomController@create']);
	Route::match(['get','post'],'roomDestroy/{id}',['as'=>'room.destroy','uses'=>'RoomController@destroy']);
	Route::get('roomEdit/{id}',['as'=>'room.edit','uses'=>'RoomController@edit']);
	Route::post('roomStore',['as'=>'room.store','uses'=>'RoomController@store']);
	Route::match(['post','get'],'roomUpdate/{id}',['as'=>'room.update','uses'=>'RoomController@update']);
	//Room type
	Route::get('room_type',['as'=>'room_type','uses'=>'RoomTypeController@index']);
	Route::get('room_typeCreate',['as'=>'room_type.create','uses'=>'RoomTypeController@create']);
	Route::match(['get','post'],'room_typeDestroy/{id}',['as'=>'room_type.destroy','uses'=>'RoomTypeController@destroy']);
	Route::get('room_typeEdit/{id}',['as'=>'room_type.edit','uses'=>'RoomTypeController@edit']);
	Route::post('room_typeStore',['as'=>'room_type.store','uses'=>'RoomTypeController@store']);
	Route::match(['post','get'],'room_typeUpdate/{id}',['as'=>'room_type.update','uses'=>'RoomTypeController@update']);
	//Product and comfort
	Route::get('pro_com',['as'=>'pro_com','uses'=>'ProductComfortController@index']);
	Route::get('pro_comCreate',['as'=>'pro_com.create','uses'=>'ProductComfortController@create']);
	Route::match(['get','post'],'pro_comDestroy/{pro_id}/{com_id}',['as'=>'pro_com.destroy','uses'=>'ProductComfortController@destroy']);
	//Route::get('pro_comEdit/{id}',['as'=>'pro_com.edit','uses'=>'ProductComfortController@edit']);
	Route::post('pro_comStore',['as'=>'pro_com.store','uses'=>'ProductComfortController@store']);
	//Route::match(['post','get'],'pro_comUpdate/{id}',['as'=>'pro_com.update','uses'=>'ProductComfortController@update']);
});
