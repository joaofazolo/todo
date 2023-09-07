<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/{todo}', [TodoController::class, 'show']);
Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);
Route::put('/todo/{todo}', [TodoController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
