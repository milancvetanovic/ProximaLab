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
    return view('home');
})->name('home');

/*------------------------------------------------------
| Login function routes.
------------------------------------------------------- */
Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

/*
 | Password reset routes.
 */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showREsetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/verifications', 'VerificationsController@showVerifications');

Route::get('/operator/verifications', 'VerificationsController@index');
Route::get('operator/verifications/create', 'VerificationsController@create');
Route::post('operator/verifications', 'VerificationsController@store');

/*--------------------------------------------------------
 | Clients routes
 -------------------------------------------------------*/
Route::get('operator/clients', 'ClientsController@index');
Route::get('operator/clients/create', 'ClientsController@create');
Route::post('operator/clients', 'ClientsController@store');
Route::get('operator/clients/{client}', 'ClientsController@show');
Route::get('operator/clients/{client}/edit', 'ClientsController@edit');
Route::patch('operator/clients/{client}', 'ClientsController@update');
Route::delete('operator/clients/{client}', 'ClientsController@destroy');

/*--------------------------------------------------------
 | Operator routes
 ---------------------------------------------------------*/
Route::get('operator/operators', 'OperatorsController@index');
Route::post('operator/operators', 'OperatorsController@store');
Route::get('operator/operators/{operator}', 'OperatorsController@show');
Route::get('operator/operators/{operator}/edit', 'OperatorsController@edit');
Route::patch('operator/operators/{operator}', 'OperatorsController@update');
Route::delete('operator/operators/{operator}', 'OperatorsController@destroy');

/*----------------------------------------------------------
 | Measuring Devices routes
 -----------------------------------------------------------*/
Route::get('operator/measuring_devices', 'MeasuringDevicesController@index');
Route::post('operator/measuring_devices', 'MeasuringDevicesController@store');
Route::patch('operator/measuring_devices/{measuring_device}', 'MeasuringDevicesController@update');
Route::get('operator/measuring_devices/{measuring_device}', 'MeasuringDevicesController@show');
Route::get('operator/measuring_devices/{measuring_device}/edit', 'MeasuringDevicesController@edit');
Route::delete('operator/measuring_devices/{measuring_device}', 'MeasuringDevicesController@destroy');
