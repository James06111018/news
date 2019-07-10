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

Route::get('/', 'NewsController@index');
Route::get('/home/index', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::post('/news', 'NewsController@postCreate');
Route::get('/news/{id}/edit', 'NewsController@edit');
Route::post('/news/{id}', 'NewsController@postEdit');
Route::delete('/news/{id}', 'NewsController@delete');
