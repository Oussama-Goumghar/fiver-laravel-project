<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModpageloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modpageloads', function (Blueprint $table) {
            $table->id();
            $table->integer('correctiveaction')->unsigned()->default(0);
            $table->integer('riskmanagement')->unsigned()->default(0);
            $table->integer('objectives')->unsigned()->default(0);
            $table->integer('opportunity')->unsigned()->default(0);
            $table->integer('compliance')->unsigned()->default(0);
            $table->integer('enviaspects')->unsigned()->default(0);
            $table->integer('auditmanagement')->unsigned()->default(0);
            $table->integer('ohsrisk')->unsigned()->default(0);
            $table->integer('documentmanagement')->unsigned()->default(0);
            $table->integer('complaintmanagement')->unsigned()->default(0);
            $table->integer('contextmanagement')->unsigned()->default(0);
            $table->integer('vendormanagement')->unsigned()->default(0);
            $table->integer('incidentreport')->unsigned()->default(0);
            $table->integer('hse')->unsigned()->default(0);
            $table->integer('hr')->unsigned()->default(0);
            $table->integer('maintainance')->unsigned()->default(0);
            $table->integer('calibration')->unsigned()->default(0);
            $table->integer('occhealth')->unsigned()->default(0);
            $table->integer('wastemanagement')->unsigned()->default(0);
            $table->integer('nearmiss')->unsigned()->default(0);
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
        Schema::dropIfExists('modpageloads');
    }
}
