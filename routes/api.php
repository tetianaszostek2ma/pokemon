<?php
use App\Http\Controllers\BannedPokemonController;
use App\Http\Controllers\PokemonInfoController;
use App\Http\Middleware\VerifySecretKey;

Route::middleware(VerifySecretKey::class)->group(function () {
    Route::get('/banned', [BannedPokemonController::class, 'index']);
    Route::post('/banned', [BannedPokemonController::class, 'store']);
    Route::delete('/banned/{id}', [BannedPokemonController::class, 'destroy']);
});


Route::post('/info', [PokemonInfoController::class, 'index']);