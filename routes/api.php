<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TargetController;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::group([
    'middleware' => 'jwt.verify',
], function ($router) {

    Route::group([
        'prefix' => 'user'
    ], function ($router) {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::group([
        'prefix' => 'targets'
    ], function ($router) {
        Route::get('/', [TargetController::class, 'index']);
    });
});
