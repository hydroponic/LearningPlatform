<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/register',[RegistrationController::class, 'create'])->name('register');
Route::post('/register',[RegistrationController::class, 'store']);
Route::get('/login',[LoginController::class, 'create'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/cart',[\App\Http\Controllers\CartController::class, 'getcart'])->middleware('auth')->name('cart');
Route::get('purchase',[\App\Http\Controllers\MainController::class, 'purchase'])->name('purchase')->middleware('auth');
Route::get('/item', [\App\Http\Controllers\ItemController::class, 'get'])->name('item');
Route::get('/my',[\App\Http\Controllers\CartController::class, 'getcart2'])->middleware('auth')->name('my');
Route::get('/cources', [\App\Http\Controllers\MainController::class, 'ready'])->name('ready');
