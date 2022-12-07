<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function pokemon()
    {
        return $this->belongsToMany(PokemonDetails::class, 'pokemon_team', 'teams_id', 'pokemon_details_id');
    }
}
