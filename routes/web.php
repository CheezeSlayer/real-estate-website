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

Route::get('home/buy', 'HomeController@list')->name('buy');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@store');

Route::get('/admin/home/list/{home}', 'HomeController@show');

Route::get('/admin/home/create', 'AdminController@create');