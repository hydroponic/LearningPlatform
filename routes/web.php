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
Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/home', 'App\Http\Controllers\MainController@home')->name('home');
Route::get('/tests', 'App\Http\Controllers\MainController@tests')->name('tests');
Route::post('/tests', 'App\Http\Controllers\MainController@tests');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');
Route::post('/contacts', 'App\Http\Controllers\MainController@contacts');
Route::get('/themes', 'App\Http\Controllers\MainController@themes')->name('themes');
Route::get('/add', 'App\Http\Controllers\MainController@add')->name('add');
Route::post('/add', 'App\Http\Controllers\MainController@add');
Route::get('/admin', 'App\Http\Controllers\MainController@admin')->name('admin');
Route::post('/admin', 'App\Http\Controllers\MainController@admin')->name('admin');
Route::get('/quiz', 'App\Http\Controllers\MainController@quiz');
Route::post('/quiz', 'App\Http\Controllers\MainController@quiz')->name('quiz');
Route::get('/thx', 'App\Http\Controllers\MainController@email')->name('email');
Route::post('/thx', 'App\Http\Controllers\MainController@email');
