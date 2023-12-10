<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

require __DIR__ . '/api/v1.php';
require __DIR__ . '/api/v2.php';



Route::prefix('auth')->group(function(){
    Route::post('/login', LoginController::class)->middleware('auth:sanctum');
    Route::post('/logout ', LogoutController::class);
    Route::post('/register ', RegisterController::class);

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
