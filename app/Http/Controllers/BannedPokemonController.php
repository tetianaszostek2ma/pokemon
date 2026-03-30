<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannedPokemon;

class BannedPokemonController extends Controller
{
    public function index()
    {
        return response()->json(BannedPokemon::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string:banned_pokemons,name'
        ]);

        $pokemon = BannedPokemon::create([
            'name' => strtolower($request->name)
        ]);

        return response()->json($pokemon, 201);
    }

    public function destroy($id) {
        $pokemon = BannedPokemon::findOrFail($id);
        $pokemon->delete();

        return response()->json(['success' => 'true']);
    }

}
