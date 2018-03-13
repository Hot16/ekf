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

Route::get('/', 'FaceController@index');

Route::get('add-face', 'FaceController@create');
Route::post('add-face', 'FaceController@store');

Route::get('add-kid/{id}', 'KidController@create');
Route::post('add-kid', 'KidController@store');

Route::get('faces-oldes-20', 'FaceController@olderTwentee');

Route::get('kids-y-7', 'FaceController@allWithKidsYSeven');