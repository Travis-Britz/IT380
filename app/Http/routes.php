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

Route::get('/', function() {
    return redirect('dashboard');
});
Route::get('home', function() {
    return redirect('dashboard');
});
Route::get('dashboard', 'PagesController@dashboard');

Route::get('profile', function() {
    return view('employees.show');
});

Route::get('incident/create', function() {
    return view('incidents.create');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);



Route::get('/faker', function() {


    $faker = Faker\Factory::create();

    echo $faker->dateTime->format('Y-m-d H:i:s');
});
