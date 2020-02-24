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

Route::get('/book/create', 'BookController@create')->name('book.create');
Route::post('/book/create', 'BookController@store');
Route::get('/bookshow', 'BookController@show')->name('book.show');

Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/create', 'CategoryController@store');
Route::get('/categoryshow', 'CategoryController@show')->name('category.show');


Route::get('/phone/create', 'PhoneController@create')->name('phone.create');
Route::post('/phone/create', 'PhoneController@store');
Route::get('/phoneshow', 'PhoneController@show')->name('phone.show');

