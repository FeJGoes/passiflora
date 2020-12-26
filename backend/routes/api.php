<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Passiflora\Http\Controllers\Auth\JwtController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',
    [JwtController::class, 'login']
)->name('api.login');

Route::middleware('auth:api')->group(function () {

    Route::post('logout',
        [JwtController::class, 'logout']
    )->name('api.logout');

    Route::post('refresh',
        [JwtController::class, 'refresh']
    )->name('api.refresh');

    Route::post('me',
        [JwtController::class, 'me']
    )->name('api.me');
});
