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

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@list');

Route::get('/posts/insert/{id}', 'PostController@insert');

Route::get('/posts/update/{id}', 'PostController@update');

Route::get('/posts/delete/{id}', 'PostController@delete');

Route::view('/users/user', 'users.user');

Route::get('/debug', 'DebugController@debug');