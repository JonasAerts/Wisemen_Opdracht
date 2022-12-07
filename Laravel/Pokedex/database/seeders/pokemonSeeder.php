<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Http\Models\sprites;
use Database\Seeders\spriteSeeder;
use Database\Seeders\statSeeder;
use Database\Seeders\abilitySeeder;
use Database\Seeders\moveSeeder;
use Database\Seeders\typeSeeder;


class pokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = storage_path() . "/app/json/pokemons.json";
        $jsonData = json_decode(file_get_contents($path), true);
        foreach ($jsonData as $pokemon) {
            $id = DB::table('pokemon_details')->insertGetId([
                'name' => $pokemon['forms'][0]['name'],
                'height' => $pokemon['height'],
                'weight' => $pokemon['weight'],
                'order' => $pokemon['order'],
                'species' => $pokemon['species']['name'],
                'form' => $pokemon['forms'][0]['name'],
            ]);

            $this->call(spriteSeeder::class,false,['sprites' => $pokemon['sprites'],'pokemonID' => $id]);
            $this->call(typeSeeder::class,false,['types' => $pokemon['types'],'pokemonID' => $id]);
            $this->call(moveSeeder::class,false,['moves' => $pokemon['moves'],'pokemonID' => $id]);
            $this->call(statSeeder::class,false,['stats' => $pokemon['stats'],'pokemonID' => $id]);
            $this->call(spriteSeeder::class,false,['sprites' => $pokemon['sprites'],'pokemonID' => $id]);
            $this->call(abilitySeeder::class,false,['abilities' => $pokemon['abilities'],'pokemonID' => $id]);
        }
    }

}
