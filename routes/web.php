<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});
Route::get('get',[TestController::class,'index']);
Route::view('blog','blog');
Route::resource('demo',BlogController::class);
Route::get('comment',[BlogController::class,'comment']);
Route::post('cstore',[BlogController::class,'cstore']);
