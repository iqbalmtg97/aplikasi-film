<?php

use App\Http\Controllers\FilmApiController;
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

Route::get('/film', [FilmApiController::class, 'index']);
Route::post('/film', [FilmApiController::class, 'store']);
Route::put('/film/{id}', [FilmApiController::class, 'update']);
Route::delete('/film/{id}', [FilmApiController::class, 'destroy']);
