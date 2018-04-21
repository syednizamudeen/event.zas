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

Route::get('/', 'VisitorsController@index');
Route::get('/backend', 'DashboardController@index');

Route::resource('services','ServicesController');
Route::resource('visitors','VisitorsController');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/home', 'DashboardController@index');