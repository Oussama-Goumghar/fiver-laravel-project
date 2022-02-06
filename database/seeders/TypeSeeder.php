<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('types')->insert([
            [
                'name' => 'High',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Medium',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Low',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
