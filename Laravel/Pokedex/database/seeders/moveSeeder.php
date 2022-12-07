<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\version_group_detailSeeder;

class moveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($moves = 0, $pokemonID = 0)
    {
        foreach ($moves as $move) {
            $id = DB::table('moves')->insertGetId([
                'move' => $move['move']['name'],
                'pokemon_details_id' => $pokemonID,
            ]);
            $this->call(version_group_detailSeeder::class,false,['details' => $move['version_group_details'],'moveID' => $id]);
        }
    }
}
