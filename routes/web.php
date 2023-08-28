<?php

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

Route::get('/', function () {
    return view('copyright');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('loginform', 'App\Http\Controllers\LoginController@store');



Route::get('authenticationpage', function () {
    return view('authentication');
});


Route::post('authenticateform', 'App\Http\Controllers\LoginController@codestore');

Route::get('/submission', function () {
    return view('sumbission');
});
