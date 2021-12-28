<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/categories', CategoryApiController::class);

// Route::get('/categories', [
//     CategoryApiController::class, 'index'
// ]);
// Route::get('/categories/{id}', [
//     CategoryApiController::class, 'detail'
// ]);

// Route::post('/categories', [
//     CategoryApiController::class, 'create'
// ]);
// Route::put('/categories/{id}', [
//     CategoryApiController::class, 'update'
// ]);
// Route::patch('/categories/{id}', [
//     CategoryApiController::class, 'update'
// ]);
// Route::delete('/categories/{id}', [
//     CategoryApiController::class, 'delete'
// ]);
