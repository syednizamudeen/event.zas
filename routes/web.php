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
Route::get('post/{name}', 'BlogsController@show')->where('show', '[a-z]+');
Route::post('blog/postimage', 'BlogsController@uploadpicture');
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
Route::post('settings/removepicture', 'SettingsController@removePicture');
Route::resource('settings','SettingsController');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

#Below lines on routes to be commented in production system
//Clear Cache facade value:
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     return '<h1>Cache facade value cleared</h1>';
// });

//Reoptimized class loader:
// Route::get('/optimize', function() {
//     $exitCode = Artisan::call('optimize');
//     return '<h1>Reoptimized class loader</h1>';
// });

//Route cache:
// Route::get('/route-cache', function() {
//     $exitCode = Artisan::call('route:cache');
//     return '<h1>Routes cached</h1>';
// });

//Clear Route cache:
// Route::get('/route-clear', function() {
//     $exitCode = Artisan::call('route:clear');
//     return '<h1>Route cache cleared</h1>';
// });

//Clear View cache:
// Route::get('/view-clear', function() {
//     $exitCode = Artisan::call('view:clear');
//     return '<h1>View cache cleared</h1>';
// });

//Clear Config cache:
// Route::get('/config-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return '<h1>Clear Config cleared</h1>';
// });