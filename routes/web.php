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

Route::get('/home/list', 'HomeController@list')->name('buy');
Route::get('/home/{home}', 'HomeController@show');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('is_admin');

Route::get('/admin/home/create', 'HomeController@create');
Route::post('/admin/home/store', 'AdminController@store');

Route::get('/admin/home/{home}/edit', 'HomeController@edit');
Route::post('/admin/home/{home}/update', 'AdminController@update');

Route::delete('/admin/home/{home}/delete', 'AdminController@destroy');