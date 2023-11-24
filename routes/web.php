<?php

use App\Http\Controllers\Auth\{LoginController, RegisterController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('connexion', [LoginController::class, "index"])->name('connexion');
Route::get('inscription', [RegisterController::class, "index"]);
Route::get('confirmation', [RegisterController::class, "index"]);
Route::post('enregistrement', [RegisterController::class, "register"])->name('enregistrement');
Route::post('connexion', [LoginController::class, "connecter"])->name('connecter');
Route::middleware('auth')->group(function(){
    Route::get('/', [LoginController::class, "index"])->name('dashboard');
});
