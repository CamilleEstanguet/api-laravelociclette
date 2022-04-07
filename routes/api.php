<?php

use Illuminate\Http\Request;
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

Route::apiResource('boiler', App\Http\Controllers\BoilerController::class);
Route::apiResource('customer', App\Http\Controllers\CustomerController::class);
Route::apiResource('technician', App\Http\Controllers\TechnicianController::class);
Route::apiResource('callout', App\Http\Controllers\CallOutController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
