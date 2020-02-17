<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 

//Api
Route::get('/getProducts','MainController@getProducts')->middleware('cors');
Route::match(['get','post'],'/searchProducts','MainController@searchProducts');
Route::get('/getProductByid/{id}','DetailsController@getProductByid');
Route::get('/getComfortsByid/{id}','DetailsController@getComfortsByid');
//Route::get('/getRoomsByid/{id}','DetailsController@getRoomsByid');
Route::get('/getRoom_typesByid/{id}','DetailsController@getRoom_typesByid');
Route::post('/addOrder1/{id}','DetailsController@addOrder1');
Route::get('/getRoom_types','DetailsController@getRoom_types');