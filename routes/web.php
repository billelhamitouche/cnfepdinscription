<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
use App\Models\Stagiaire;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('stagiaires', StagiaireController::class);

Route::get('stagiaires/create', [StagiaireController::class, 'create']);


// Display the form to create a new Stagiaire
Route::get('/stagiaire/create', function () {
    return view('stagiaire.create');
})->name('stagiaire.create');
