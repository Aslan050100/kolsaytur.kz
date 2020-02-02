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
 
Route::get('/getProducts','MainController@getProducts');

Route::match(['get','post'],'/searchProducts','MainController@searchProducts');


Route::get('/getProductByid/{id}','DetailsController@getProductByid');

Route::get('/getComfortsByid/{id}','DetailsController@getComfortsByid');

Route::get('/getRoomsByid/{id}','DetailsController@getRoomsByid');

Route::get('/getRoom_typesById/{id}','DetailsController@getRoom_typesById');

Route::post('/addOrder1/{pro_id}','DetailsController@addOrder1');
