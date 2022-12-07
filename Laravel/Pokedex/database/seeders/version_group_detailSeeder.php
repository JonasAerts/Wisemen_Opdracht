<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class version_group_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($details = 0, $moveID = 0)
    {
        foreach ($details as $detail) {
            DB::table('version_group_details')->insert([
                'level_learned_at' => $detail['level_learned_at'],
                'move_learn_method' => $detail['move_learn_method']['name'],
                'version_group' => $detail['version_group']['name'],
                'moves_id' => $moveID,
            ]);
        }
    }
}
