<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sprites extends Model
{
    use HasFactory;

    public function pokemonDetails(){
        return $this->belongsTo(PokemonDetails::class);
    }
}
