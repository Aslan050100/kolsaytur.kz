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
Route::match(['get','post'],'/searchProducts','MainController@searchProducts')->middleware('cors');
Route::get('/getProductByid/{id}','DetailsController@getProductByid')->middleware('cors');
Route::match(['get','post'],'/addOrder1/{id}','DetailsController@addOrder1')->middleware('cors');
Route::get('/getRoom_types','DetailsController@getRoom_types')->middleware('cors');
Route::match(['get','post'],'/checkIp/{id}','DetailsController@checkIp')->middleware('cors');
