<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eleves', EleveController::class);

// Activité part

Route::get('/activite',[ActiviteController::class , 'index'])->name('activite.index');
Route::get('/activite/{id}',[ActiviteController::class , 'show'])->name('activite.show');

Route::get('/eleve-activite/add',[ActiviteController::class, 'eleveActivite'])->name('eleve.activite');
Route::post('/eleve-activite/add',[ActiviteController::class, 'eleveActiviteStore'])->name('eleveActiviteStore');