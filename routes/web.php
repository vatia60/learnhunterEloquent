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

Route::get('/', 'indexController@index')->name('index');

Route::get('/book', 'BookController@index')->name('book.index');
Route::post('/book', 'BookController@create');

Route::get('/category', 'CategoryController@category')->name('category');
Route::post('/category', 'BookController@create');

Route::get('/phone', 'PhoneController@phone')->name('phone');
Route::post('/phone', 'BookController@create');
