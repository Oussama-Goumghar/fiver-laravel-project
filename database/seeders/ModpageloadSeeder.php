<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModpageloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modpageloads')->insert(
            [
                'objectives' => '503',
                'auditmanagement' => '669',
                'compliance' => '134',
                'riskmanagement' => '345',
                'opportunity' => '239',
                'documentmanagement' => '398',
                'enviaspects' => '336',
                'ohsrisk' => '208',
                'correctiveaction' => '243',
                'complaintmanagement' => '23',
                'contextmanagement' => '82',
                'vendormanagement' => '53',
                'incidentreport' => '51',
                'nearmiss' => '0',
            ]
        );
    }
}
