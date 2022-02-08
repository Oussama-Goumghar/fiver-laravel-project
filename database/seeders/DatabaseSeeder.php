<?php

namespace Database\Seeders;

use App\Models\Modenadisable;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['categories', 'types', 'modpageloads', 'modenadisables', 'companysizes'];
    public function run()
    {
        Model::unguard();
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call(CategorySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ModpageloadSeeder::class);
        $this->call(ModenadisableSeeder::class);
        $this->call(CompanySizeSeeder::class);
        Model::reguard();
    }
}
