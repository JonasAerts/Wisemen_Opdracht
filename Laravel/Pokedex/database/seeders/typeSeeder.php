<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($types = 0, $pokemonID = 0)
    {
        foreach ($types as $type){
            DB::table('types')->insert([
                'type' => $type['type']['name'],
                'slot' => $type['slot'],
                'pokemon_details_id' => $pokemonID,
            ]);
        }

    }
}
