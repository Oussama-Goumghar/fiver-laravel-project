<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModenadisablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modenadisables', function (Blueprint $table) {
            $table->id();
            $table->boolean('objectives')->default(false);
            $table->boolean('auditmanagement')->default(false);
            $table->boolean('compliance')->default(false);
            $table->boolean('riskmanagement')->default(false);
            $table->boolean('opportunity')->default(false);
            $table->boolean('documentmanagement')->default(false);
            $table->boolean('enviaspects')->default(false);
            $table->boolean('ohsrisk')->default(false);
            $table->boolean('correctiveaction')->default(false);
            $table->boolean('auditschedulelogs')->default(false);
            $table->boolean('complaintmanagement')->default(false);
            $table->boolean('contextmanagement')->default(false);
            $table->boolean('vendormanagement')->default(false);
            $table->boolean('incidentreport')->default(false);
            $table->boolean('hse')->default(false);
            $table->boolean('hr')->default(false);
            $table->boolean('maintainance')->default(false);
            $table->boolean('calibration')->default(false);
            $table->boolean('occhealth')->default(false);
            $table->boolean('wastemanagement')->default(false);
            $table->boolean('nearmiss')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modenadisables');
    }
}
