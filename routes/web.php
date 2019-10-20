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



Route::get('/', function() 
{
	return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delete/{id}','HomeController@delete');
Auth::routes();
Route::get('/{data}','HandlerController@handle')->where('data', '[A-Z]{2}');
Route::post('/', 'HandlerController@index');
Route::get('/makebase', 'UrlController@make');


