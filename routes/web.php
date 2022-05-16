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
Route::get('/kontrak/hasil', 'KontrakController@show')->name('kontrak.hasil');
Route::patch('/kontrak/updatePenyedia', 'KontrakController@updatePenyedia');
Route::get('/kontrak/{id}/addPenyedia', 'KontrakController@addPenyedia');
Route::post('/kontrak/savePenyedia', 'KontrakController@savePenyedia');
Route::get('/kontrak/{id}/addLelang', 'KontrakController@addLelang');
Route::post('/kontrak/saveLelang', 'KontrakController@saveLelang');
Route::delete('/kontrak/delLelang/{id}', 'KontrakController@delLelang');
Route::get('/kontrak/{id}/addDataKontrak', 'KontrakController@addDataKontrak');
Route::post('/kontrak/saveDataKontrak', 'KontrakController@saveDataKontrak');
Route::delete('/kontrak/delDataKontrak/{id}', 'KontrakController@delDataKontrak');

Route::get('/kontrak/add/utils/{id}', 'KontrakController@addUtils');
Route::post('/kontrak/saveUtil', 'KontrakController@saveUltis');
Route::get('/kontrak/{id}/showUtils', 'KontrakController@showUtils');

// end kontrak
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
