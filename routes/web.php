<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaFilmController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/sedang_tayang', [LandingController::class, 'sedangTayang']);
Route::get('/segera_hadir', [LandingController::class, 'segeraHadir']);

Auth::routes();

Route::group(['middleware' => ['auth', 'checkRole:Admin']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/kelola_film', [KelolaFilmController::class, 'index']);
    Route::post('/kelola_film/store', [KelolaFilmController::class, 'store']);
    Route::get('/getdata/{id}', [KelolaFilmController::class, 'getdata']);
    Route::post('/kelola_film/update', [KelolaFilmController::class, 'update']);
    Route::get('/kelola_film/destroy/{id}', [KelolaFilmController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'checkRole:User']], function () {
    Route::get('/favorit', [LandingController::class, 'favorit']);
    Route::get('/tambahFavorit', [LandingController::class, 'tambahFavorit']);
    Route::get('/getdatafilm/{id}', [LandingController::class, 'getdata']);
    Route::post('/rating', [LandingController::class, 'rating']);
});
