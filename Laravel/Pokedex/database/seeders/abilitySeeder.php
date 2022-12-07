<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class abilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($abilities = 0, $pokemonID = 0)
    {
        foreach ($abilities as $ability) {
            DB::table('abilities')->insertGetId([
                'ability' => $ability['ability']['name'],
                'slot' => $ability['slot'],
                'is_hidden' => $ability['is_hidden'],
                'pokemon_details_id' => $pokemonID,
            ]);
        }
    }
}
