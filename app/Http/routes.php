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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/{provider?}', 'Auth\AuthController@login');

Route::get('/dashboard', function() {
    if(Auth::check()) return 'Welcome back, ' . Auth::user()->first_name;
});