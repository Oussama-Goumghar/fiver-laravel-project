<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModenadisableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modenadisables')->insert(
            [
                'objectives' => '1',
                'auditmanagement' => '1',
                'compliance' => '1',
                'riskmanagement' => '1',
                'opportunity' => '1',
                'documentmanagement' => '1',
                'enviaspects' => '1',
                'ohsrisk' => '1',
                'correctiveaction' => '1',
                'auditschedulelogs' => '1',
                'complaintmanagement' => '1',
                'contextmanagement' => '1',
                'vendormanagement' => '1',
                'incidentreport' => '1',
                'nearmiss' => '1',
            ]
        );
    }
}
