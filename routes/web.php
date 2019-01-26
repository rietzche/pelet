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

Route::get('/dashboard', function() {
    return view('user.dashboard');
})->name('Dashboard');

Route::get('/profile', function() {
    return view('user.profile');
})->name('Management Profile');

Route::get('/calendar', function() {
    return view('user.calendar');
})->name('Kalender');

Route::get('/MSEUndangan', function() {
    return view('externals.undangan');
})->name('Surat Undangan');