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
    return 1;
    return view('welcome');
});
Route::get('dbTest', [\App\Http\Controllers\HomeController::class, 'dbTest']);
Route::get('testredis', [\App\Http\Controllers\HomeController::class, 'testredis']);
Route::get('test', [\App\Http\Controllers\HomeController::class, 'test']);
