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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/sungai', 'sungaiController@index');
Route::post('/sungai/add', 'sungaiController@add');

Route::get('/lh', 'sungaiController@lh');
Route::post('/lh/add', 'sungaiController@lhadd');

Route::get('/larap', 'larapController@larap');
Route::post('/larap/add', 'sungaiController@larapadd');

Route::get('/home', 'sungaiController@home')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
