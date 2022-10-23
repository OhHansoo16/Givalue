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

Route::get('/', 'HousesController@index');

Route::get('/posts/create', 'HousesController@create');

Route::post('/houses', 'HousesController@store');

Route::get('/posts/{post}', 'RenovationsController@show');

Route::post('/renovation', 'RenovationsController@store');