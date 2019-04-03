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

Auth::routes(['register' => false]);

// Home
Route::get('/', 'NewsController@list')->name('home');

Route::get('/news/create', 'NewsController@create')->middleware('auth');
Route::post('/news/create', 'NewsController@store')->middleware('auth');;

Route::get('/news/{news}', 'NewsController@show');