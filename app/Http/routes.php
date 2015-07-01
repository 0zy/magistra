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

Route::model('user', 'User');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function() {
    if(Auth::check()) return view('home');

    return redirect('/login');
});

Route::get('/calendar', function() {
    if(Auth::check()) return view('calendar');

    return redirect('/login');
});

Route::get('/profile', function() {
    if(Auth::check()) return view('profile');

    return redirect('/login');
});

Route::post('/profile/edit', 'Auth\AuthController@store');

Route::get('/login', 'Auth\LoginController@showOptions');
Route::get('/login/{provider?}', 'Auth\AuthController@login');
Route::get('/logout', function(){
    Auth::logout();
    return "Logged out";
});


