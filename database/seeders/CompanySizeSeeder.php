<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('companysizes')->insert(
            [
                'compsize' => '300',
                'name' => 'Client Control',
                'email' => 'quickcg@setilas.com',
                'loginsperperson' => '1',
                'created_at' => $now,
                'updated_at' => $now
            ]
        );
    }
}
