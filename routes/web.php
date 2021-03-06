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

Route::get('/', 'HomeController@index');

Route::get('/item', 'ItemController@index');

Route::get('/items', 'ItemController@items');
Route::get('/item/{id}', 'ItemController@item');
/* Route::get('/itemset/save', 'ItemContoller@itemsetSave'); */

Route::get('/champions', 'ItemController@champions');
Route::get('/champion/{id}', 'ItemController@champion');
