<?php

use App\Http\Controllers\ApiController;
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


Route::get('/test', function () {
    return "The Message";
});


Route::post('/usr', [ApiController::class, 'store']);
Route::get('/usr', [ApiController::class, 'index']);
Route::get('/usr/{id}', [ApiController::class, 'show']);
Route::put('/usr/{id}', [ApiController::class, 'update']);
Route::delete('/usr/{id}', [ApiController::class, 'delete']);
Route::get('/usr/search/{name}',[ApiController::class, 'search']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


