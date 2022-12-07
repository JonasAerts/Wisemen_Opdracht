<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonDetails extends Model
{
    use HasFactory;

    public function sprites() {
        return $this->hasOne(sprites::class);
    }
    public function types() {
        return $this->hasMany(types::class);
    }
    public function moves() {
        return $this->hasMany(moves::class);
    }
    public function stats() {
        return $this->hasMany(stats::class);
    }
    public function abilities() {
        return $this->hasMany(abilities::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Teams::class, 'pokemon_team_table', 'teams_id', 'pokemon_details_id');
    }
}
