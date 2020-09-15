<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('contact', 'ContactController')->middleware('auth');
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::get('user', 'UserController@index')->name('user.index')->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
