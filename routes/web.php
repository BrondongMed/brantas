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
Route::get('/admin/delLh/{id}', 'sungaiController@delLh');

Route::get('/larap', 'larapController@larap');
Route::post('/larap/add', 'ç@larapadd');

Route::get('/home', 'sungaiController@home')->name('home');
Route::get('/admin/delSungai/{id}', 'sungaiController@delSungai');
Route::get('/admin/{id}/edit', 'sungaiController@edit');
Route::put('/admin/update', 'sungaiController@update');

// kontrak
Route::get('/kontrak', 'KontrakController@index');
Route::post('/kontrak/add', 'KontrakController@add');
Route::post('/kontrak/save', 'KontrakController@save');
Route::get('/kontrak/hasil', 'KontrakController@show');
Route::get('/kontrak/add/utils/{id}', 'KontrakController@addUtils');

// end kontrak
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
