<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DatabaseController;
use \App\Http\Controllers\HappyBookStoreController;

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

Route::get('/',[DatabaseController::class,'Home']);
Route::get('/Home',[DatabaseController::class,'Home']);
Route::get('/Category/{id}',[DatabaseController::class,'Category']);
Route::get('/Detail/{id}',[DatabaseController::class,'Detail']);
Route::get('/Contact',[DatabaseController::class,'Contact']);
