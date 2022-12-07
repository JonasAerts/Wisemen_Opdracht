<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class spriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($sprites = 0, $pokemonID = 0)
    {
        DB::table('sprites')->insert([
            'back_default' => $sprites['back_default'],
            'back_female' => $sprites['back_female'],
            'back_shiny' => $sprites['back_shiny'],
            'back_shiny_female' => $sprites['back_shiny_female'],
            'front_default' => $sprites['front_default'],
            'front_female' => $sprites['front_female'],
            'front_shiny' => $sprites['front_shiny'],
            'front_shiny_female' => $sprites['front_shiny_female'],
            'pokemon_details_id' => $pokemonID,
        ]);
    }
}
