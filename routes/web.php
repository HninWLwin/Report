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
  return view('welcome');
});
Route::get('/register', function () {
  return view('auth.register-user');
});
Route::get('/login', function () {
  return view('auth.login-user');
});
Route::post('/registerUser', 'Auth\RegisterController@create');
Route::post('/loginUser', 'Auth\LoginController@login');

Auth::routes();

Route::get('/user', 'User\UserController@index')->name('user');
