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

Route::get('/', 'HomeController@index');
Route::get('/backend', 'DashboardController@index');

Route::resource('services','ServicesController');
Route::resource('home','HomeController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');