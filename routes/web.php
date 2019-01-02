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


Route::get('/categories', 'CategoryController@index');
Route::get('/categories/view/{id}', 'CategoryController@show');
Route::get('/categories/store', 'CategoryController@store');
Route::get('/categories/update', 'CategoryController@update');
Route::get('/categories/delete', 'CategoryController@delete');