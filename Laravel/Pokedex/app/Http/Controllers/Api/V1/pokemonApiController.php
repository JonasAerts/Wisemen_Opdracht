<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PokemonDetails;
use App\Models\moves;
use App\Http\Resources\V1\pokemonResource;
use App\Http\Resources\V1\pokemonCollection;
use App\Http\Resources\V1\compactPokemonCollection;

class pokemonApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = PokemonDetails::with('sprites:front_default,pokemon_details_id','types')->get() ;
        return new compactPokemonCollection($details);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = PokemonDetails::with('moves','sprites','types','moves.version_group_details','abilities','stats')->get()->find($id) ;
        return new pokemonResource($details);
        #return PokemonDetails::find($id)->moves->version_group_details;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
