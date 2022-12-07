<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\sprites;
use App\Models\PokemonDetails;

class pokemonController extends Controller
{
    public function getExternalPokemon($id){
        $url = "https://pokeapi.co/api/v2/pokemon/";
        $res = Http::get($url.$id)->json();
        $sprites = array('back_default' => $res['sprites']['back_default'],
        'back_female' => $res['sprites']['back_female'],
        'back_shiny' => $res['sprites']['back_shiny'],
        'back_shiny_female' => $res['sprites']['back_shiny_female'],
        'front_default' => $res['sprites']['front_default'],
        'front_female' => $res['sprites']['front_female'],
        'front_shiny' => $res['sprites']['front_shiny'],
        'front_shiny_female' => $res['sprites']['front_shiny_female'],
    );
        #echo json_decode($data);

        $pritesid = DB::table('sprites')->insertGetId($sprites);
        #foreach ($res['sprites']['back_default'] as $value){var_dump($value);};
    }


}
