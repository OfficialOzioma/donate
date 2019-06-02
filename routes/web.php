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

Route::get('/', 'welcomeController@index');
Route::get('/about', 'welcomeController@about');
Route::get('/contact', 'ContactController@index');
Route::get('/events', 'eventsController@index');
Route::get('/login', 'signinController@index');
Route::get('/register', 'signupController@index');
Route::post('/register', 'signupController@store');
