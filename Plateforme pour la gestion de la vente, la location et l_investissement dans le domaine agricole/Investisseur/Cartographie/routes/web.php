<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\inscription;

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

Route::get('/','App\Http\Controllers\test@index');
Route::get('/i', 'App\Http\Controllers\test@culture');

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/inscriptionform', 'App\Http\Controllers\inscription@test');
Route::get('/l','App\Http\Controllers\login@connection');
Route::get('/p','App\Http\Controllers\profile@profil');
Route::get('/change_pass', 'App\Http\Controllers\modification@change_pass');
Route::get('/culture', 'App\Http\Controllers\modification@culture');
Route::get('/modification', 'App\Http\Controllers\modification@modification');
Route::get('/registre', 'App\Http\Controllers\modification@registre');
Route::get('/', 'App\Http\Controllers\test@index')->name('home');
Route::get('/dec', 'App\Http\Controllers\test@dec');
Route::get('/check/{i}', 'App\Http\Controllers\test@check');
Route::get('/chat/{i}', 'App\Http\Controllers\test@chat');
Route::get('/chat/sendmsg/{p}', 'App\Http\Controllers\test@sendmsg');
Route::get('/chat/back/{i}', function($i){
    return redirect('/test');
});
Route::get('/test','App\Http\Controllers\test@test')->name('test');
Route::get('/search','App\Http\Controllers\HomeController@search')->name('search');
Route::get('/{id}/{prix}/{type}','App\Http\Controllers\HomeController@getUserDetail')->name('product');
Route::get('details/{id}','App\Http\Controllers\HomeController@details')->name('details');
Route::get('details_agri/{nom}','App\Http\Controllers\HomeController@details_agri')->name('details_agri');
Route::get('agri/{agri}','App\Http\Controllers\HomeController@agri')->name('agri');
Route::get('chat_agri/{nom}','App\Http\Controllers\HomeController@chat_agri')->name('chat_agri');