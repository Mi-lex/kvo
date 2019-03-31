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

// Home

Route::get('/', 'NewsController@show');


Route::get('/news/3', 'NewsController@show');

Route::get('/news/add', 'NewsController@create');
Route::post('/news/add', 'NewsController@store');
