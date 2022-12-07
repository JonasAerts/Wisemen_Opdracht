<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\V1\teamsApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('pokemons',pokemonApiController::class);
    Route::apiResource('teams',teamsApiController::class);
    Route::Post('teams/{id}','App\Http\Controllers\Api\V1\teamsApiController@setPokemons');

});
Route::group(['prefix' => 'v2','namespace' => 'App\Http\Controllers\Api\V2'], function(){
    Route::apiResource('pokemons',pokemonApiController::class);
});
