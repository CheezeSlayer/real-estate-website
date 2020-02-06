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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'AdminController@index')->name('admin');

Route::get('/buy', 'BuyController@index')->name('buy');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/home/list', 'AdminController@show');

Route::get('/admin/home/create', 'AdminController@create');

Route::post('/admin', 'AdminController@store');