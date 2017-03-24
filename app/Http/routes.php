<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/login', 'DoctorController@index');

Route::get('/login/code', 'DoctorController@autenticate');

Route::get('/login/admin', 'DoctorController@adminMenu');

Route::get('/user/register',  'DoctorController@register');
Route::post('/user/register', 'DoctorController@CreatePatient');
