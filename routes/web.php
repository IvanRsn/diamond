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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/table', 'HomeController@table')->name('home');

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/logout', function () {
	Auth::logout();
	return view('welcome');
});



/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {
  return view('welcome');
})->name('login');

Route::get('register', function() {
  return view('welcome');
})->name('register');
*/