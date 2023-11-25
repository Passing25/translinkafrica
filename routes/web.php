<?php

use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\NouvelleController;
use App\Http\Controllers\PropositionController;
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
    Route::get('/', [HomeController::class, "index"])->name('dashboard');
    Route::get('deconnexion', [LoginController::class, "deconnecter"]);
    Route::resource('expedition', ExpeditionController::class);
    Route::resource('proposition', PropositionController::class);
});
