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



Auth::routes();

Route::get('/', 'PageController@index')->name('home');
Route::get('/{slug}.html', 'PageController@single');
Route::get('/list/', 'BookController@index')->name('books');
Route::match(['get', 'post'], '/book/{slug}.html', 'BookController@single');
