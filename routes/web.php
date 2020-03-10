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

Route::get('/', 'HomeController@list');
Auth::routes();

// Home
Route::get('/home/list', 'HomeController@list')->name('buy');
Route::get('/home/{home}', 'HomeController@show');
Route::get('/home/list/search', 'HomeController@index');

// Agent
Route::get('/agent/list', 'AgentController@list');


// Admin
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('is_admin');

// Admin Home
Route::get('/admin/home/create', 'HomeController@create')->middleware('is_admin');
Route::post('/admin/home/store', 'AdminController@store')->middleware('is_admin');
Route::get('/admin/home/{home}/edit', 'HomeController@edit')->middleware('is_admin');
Route::post('/admin/home/{home}/update', 'AdminController@update')->middleware('is_admin');
Route::delete('/admin/home/{home}/delete', 'AdminController@destroy')->middleware('is_admin');

// Admin Agent
Route::get('/admin/agent/create', 'AgentController@create')->middleware('is_admin');