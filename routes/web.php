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
});

Route::get('login', 'LoginController@showLoginForm');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::get('/register', 'RegistrationController@showRegisterForm');
Route::post('/register', 'RegistrationController@store');

Route::get('/verifications', 'VerificationsController@showVerifications');