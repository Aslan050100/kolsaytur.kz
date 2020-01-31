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

Route::get('/',['uses'=>'MainController@index','as'=>'index']);

Route::match(['get','post'],'/details/{id}',['uses'=>'DetailsController@index','as'=>'details']);

Route::match(['get','post'],'/addOrder/{pro_id}',['uses'=>'DetailsController@addOrder','as'=>'addOrder']);

Route::match(['get','post'],'/search',['uses'=>'MainController@search','as'=>'search']);