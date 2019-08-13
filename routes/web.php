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

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('api/items', 'ItemsController');

Route::get('api/items',         'ItemsController@index')->name('items');
Route::get('api/items/{item}',  'ItemsController@show')->name('items_show');
Route::post('api/items',        'ItemsController@store')->name('items_store');
Route::put('api/items/{item}',  'ItemsController@update')->name('items_update');
Route::put('api/items/{item}',  'ItemsController@destroy')->name('items_destroy');
