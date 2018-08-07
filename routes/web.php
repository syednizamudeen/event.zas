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
Route::resource('contact','ContactController');
Route::resource('about','AboutController');
Route::resource('blog','BlogsController');
Route::resource('ideas','IdeasController');
Route::get('vendors/register', 'VendorsController@register');
Route::resource('vendors','VendorsController');
Route::resource('subscriptions','SubscriptionsController');
Route::resource('countries','CountriesController');
Route::resource('plans','PlansController');
Route::get('settings/account', 'SettingsController@account');
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/picture', 'SettingsController@picture');
Route::get('settings/connection', 'SettingsController@connection');
Route::get('settings/payment', 'SettingsController@payment');
Route::get('settings/subscription', 'SettingsController@subscription');
Route::get('settings/blocked', 'SettingsController@blocked');
Route::get('settings/billing', 'SettingsController@billing');
Route::get('settings/notification', 'SettingsController@notification');
Route::resource('settings','SettingsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');