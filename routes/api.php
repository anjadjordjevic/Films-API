<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmRediteljController;
use App\Http\Controllers\FilmZanrController;
use App\Http\Controllers\RediteljController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFilmController;
use App\Http\Controllers\ZanrController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class,'index'])->name('users.show');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.index');

Route::resource('films', FilmController::class)->only(['index','show','update','store','destroy']);
Route::resource('users.films', UserFilmController::class);

Route::resource('reditelj',RediteljController::class);
Route::resource('zanr',ZanrController::class);

Route::get('/users/{id}/films',[UserFilmController::class, 'index'])->name('users.films.index');
Route::resource('film.reditelj/{id}',FilmRediteljController::class);
Route::resource('zanr.film',FilmZanrController::class);
