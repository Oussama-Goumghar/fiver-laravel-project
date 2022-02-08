<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('categories')->insert([
            [
                'categoryname' => 'External Audit',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoryname' => 'Management Review',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoryname' => 'Corrective Action',
                'color' => '#bcf60c',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
