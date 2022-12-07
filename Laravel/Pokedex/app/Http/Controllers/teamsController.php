<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\PokemonDetails;
use app\Models\Teams;

class teamsController extends Controller
{
    public function createTeam($name){
        $team = Teams::create(['name' => 'team'.$name]);
    }
    public function index(){
        $pokemon = PokemonDetails::find(1);
        $pokemon = PokemonDetails::find(1);
    }
}
