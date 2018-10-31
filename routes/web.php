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

//Route Master Pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

//Route Mahasiswa Pages
Route::get('mahasiswa/tambah', 'MhsController@create');
Route::post('mahasiswa/tambah', 'MhsController@store');
Route::get('mahasiswa', 'MhsController@index');
Route::get('mahasiswa/{nim?}/edit', 'MhsController@edit');
Route::post('mahasiswa/{nim?}/edit', 'MhsController@update');
Route::post('mahasiswa/{nim?}/delete', 'MhsController@destroy');

//Route Auth Component
Route::get('daftar', 'Auth\RegisterController@showRegistrationForm');
Route::post('daftar', 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');