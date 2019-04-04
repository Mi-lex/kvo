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

// Home/News list
Route::get('/', 'NewsController@list')->name('home');

// Store news
Route::get('/news/create', 'NewsController@create')->middleware('auth');
Route::post('/news/create', 'NewsController@store')->middleware('auth');

Route::get('/news/create', 'NewsController@create');
Route::post('/news/create', 'NewsController@store');

// Show separate news
Route::get('/news/{news}', 'NewsController@show');

// Documents
Route::get('/docs', 'NotesController@list');

// Store documents
Route::get('/docs/create', 'NotesController@create')->middleware('auth');
Route::post('/docs/create', 'NotesController@store')->middleware('auth');

// Download document

Route::get('/docs/{document}', 'docsController@download');