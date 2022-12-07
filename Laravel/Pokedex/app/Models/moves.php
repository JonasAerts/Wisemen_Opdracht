<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moves extends Model
{
    use HasFactory;

    public function version_group_details() {
        return $this->hasMany(version_group_details::class);
    }
    public function pokemonDetails(){
        return $this->belongsTo(PokemonDetails::class);
    }
}

