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

Route::get('/','App\Http\Controllers\admin@index');
Route::get('/login','App\Http\Controllers\admin@connection');
Route::get('/index','App\Http\Controllers\admin@index');
Route::get('/d','App\Http\Controllers\admin@Déconnecter');
Route::get('/users','App\Http\Controllers\admin@users');
Route::get('/NA','App\Http\Controllers\admin@NA');
Route::get('/VA', 'App\Http\Controllers\admin@VA');
Route::get('/check/{id}','App\Http\Controllers\admin@check');
Route::get('/delete/{id}','App\Http\Controllers\admin@delete');
Route::get('/R','App\Http\Controllers\admin@A');
Route::get('/P','App\Http\Controllers\admin@L');
Route::get('/I','App\Http\Controllers\admin@I');
Route::get('/farmers','App\Http\Controllers\admin@farmers');
Route::get('/send/{i}','App\Http\Controllers\admin@send');
Route::get('/sendA/{i}','App\Http\Controllers\admin@sendA');