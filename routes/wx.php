<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/11/3
 * Time: 15:54
 */
use Illuminate\Support\Facades\Route;

Route::post('auth/register', [\App\Http\Controllers\Wx\AuthController::class, 'register']);