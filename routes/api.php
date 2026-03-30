<?php
use App\Http\Controllers\BannedPokemonController;

Route::get('/banned', [BannedPokemonController::class, 'index']);
Route::post('/banned', [BannedPokemonController::class, 'store']);
Route::delete('/banned/{id}', [BannedPokemonController::class, 'destroy']);