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

Route::get('/','NewsController@index');

Route::get('/add','NewsController@create');

Route::post('/add_news','NewsController@add_news')->name('addNews');

Route::get('/update/{id}','NewsController@update');

Route::put('/update_news','NewsController@update_news')->name('updateNews');

Route::get('/delete/{id}','NewsController@delete')->name('deleteNews');
