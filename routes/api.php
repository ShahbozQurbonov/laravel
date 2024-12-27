<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\ShController;
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

Route::apiResource('crud',CrudController::class);




Route::post('login', [ShController::class, 'login']);
Route::post('register',[ShController::class,'register']);
Route::post('logout',[ShController::class,'logout'])->Middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
