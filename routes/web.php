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

Route::get('/','MainPage@index')->name('MainPage');
Route::resource('/book','BookController');
Route::resource('listing','ListingsController');
Route::get('/book/genre/{genre}','BookController@genreSearch')->name('BookGenre');
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search', 'SearchController@index')->name('home');
