<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($stats = 0, $pokemonID = 0)
    {
        foreach ($stats as $stat) {
            DB::table('stats')->insert([
                'stat' => $stat['stat']['name'],
                'base_stat' => $stat['base_stat'],
                'effort' => $stat['effort'],
                'pokemon_details_id' => $pokemonID,
            ]);
        }
    }
}
