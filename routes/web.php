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


Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu', [
	'as' 	=> 'getTrangchu',
	'uses' 	=> 'logincontroller@getTrangchu'
]);

Route::get('login', [
	'as' 	=> 'getLogin',
	'uses' 	=> 'logincontroller@getLogin'
]);

Route::get('post', [
	'as' 	=> 'getPost',
	'uses' 	=> 'logincontroller@getPost'
]);


Route::get('prodetail', [
	'as' 	=> 'prodetail',
	'uses' 	=> 'ProductController@proDetail'
]);
