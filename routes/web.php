<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TerrainController;
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

Route::get('/', function () {
    return view('welcome');
});

// Liste des terrains
Route::get('/lister-terrains',[TerrainController::class,'lister'])->name('terrains.lister');

// Creation de terrains
Route::get('/creer-form-terrains',[TerrainController::class,'formulaire'])->name('terrains.form');
Route::post('/creer-terrains',[TerrainController::class,'creer'])->name('terrains.creer');

// Supprission d'un terrains
Route::get('/supprimer-terrains/{id}',[TerrainController::class,'supprimer'])->name('terrains.supprimer');

// Modification d'un terrains
Route::get('/formulaire-terrains/{id}',[TerrainController::class,'form'])->name('terrain.formulaire');
Route::post('/modifier-terrains/{id}',[TerrainController::class,'modifier'])->name('terrains.modifier');
