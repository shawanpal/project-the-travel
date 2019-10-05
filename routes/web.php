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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/packages', 'PackageController@index')->name('package');
Route::get('/packages/{packageName}', 'PackageController@details')->name('package_details');


Route::get('/book-now', 'PackageController@booking')->name('booking');

/**
 * Auth Routes
 */
Route::get('/signup', 'AuthController@signup');
Route::get('/signin', 'AuthController@signin');
Route::post('/userLogin', 'Auth\LoginController@userLogin')->name('login');
Route::post('/userRegister', 'Auth\RegisterController@userRegister')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');