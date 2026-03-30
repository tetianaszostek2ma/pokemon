<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PokemonApiService
{
    protected string $url;

    public function __construct()
    {
        $this->url = 'https://pokeapi.co/api/v2';
    }

    public function getPokemon($name)
    {
        $response = Http::get("{$this->url}/pokemon/{$name}");

        return $response->json();
    }

}
