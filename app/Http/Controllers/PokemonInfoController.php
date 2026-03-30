<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannedPokemon;
use App\Services\PokemonApiService;

class PokemonInfoController extends Controller
{

    public function index(Request $request)
    {

        $pokemonApi = new PokemonApiService();
        $requested = (array) $request->name;

        $banned = BannedPokemon::query()
            ->pluck('name')
            ->map(fn($n) => strtolower($n))
            ->values()
            ->all();

        foreach ($requested as $r) {
            if (in_array($r, $banned)) {
                continue;
            }
            
           $results[] = $pokemonApi->getPokemon($r);
        }
        return response()->json([
            'data' => $results,
        ], 200);
    }
}
