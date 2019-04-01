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
Route::get('/', 'NewsController@list');

Route::get('/news/create', 'NewsController@create');
Route::post('/news/create', 'NewsController@store');

Route::get('/news/{news}', 'NewsController@show');

