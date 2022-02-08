<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_reports', function (Blueprint $table) {
            $table->id();
            $table->string('addedby');
            $table->string('addeddate');
            $table->string('department');
            $table->string('area');
            $table->string('report_no');
            $table->string('incident_type');
            $table->string('injuredperson');
            $table->string('empid');
            $table->string('hospital');
            $table->string('incidentplace');
            $table->string('incidentdate');
            $table->string('emplyoer');
            $table->string('trade_or_occupation');
            $table->text('incidentdesc');
            $table->text('actions');
            $table->string('local_regulation')->nullable();
            $table->string('eval')->nullable();
            $table->string('pubrec')->nullable();
            $table->string('probablity')->nullable();
            $table->string('finloss')->nullable();
            $table->string('efcom')->nullable();
            $table->string('humtur')->nullable();
            $table->string('potloss')->nullable();
            $table->string('sevpotloss')->nullable();
            $table->string('porbocc')->nullable();
            $table->string('time');
            $table->string('reviewed_at')->nullable();
            $table->string('reviewed_by')->nullable();
            $table->string('reviewed')->nullable();
            $table->text('justification')->nullable();
            $table->string('riskassessment')->nullable();
            $table->string('riskassess')->nullable();
            $table->string('toolbox')->nullable();
            $table->string('tooldate')->nullable();
            $table->string('training')->nullable();
            $table->string('traindate')->nullable();
            $table->string('autherised')->nullable();
            $table->text('activity')->nullable();
            $table->text('investigatordisc')->nullable();
            $table->string('bodypart')->nullable();
            $table->string('unsafework')->nullable();
            $table->string('unsafeact')->nullable();
            $table->string('ppkit')->nullable();
            $table->string('prevent')->nullable();
            $table->string('rootcause')->nullable();
            $table->string('corrective_act')->nullable();
            $table->string('currective_targdate')->nullable();
            $table->string('responsiblity')->nullable();
            $table->integer('severity')->nullable();
            $table->string('further_investigate')->nullable();
            $table->string('investigation_status')->nullable();
            $table->string('workunsafe')->nullable();
            $table->string('actunsafe')->nullable();
            $table->string('attachmentby_reporter')->nullable();
            $table->string('attachmentby_reviewer')->nullable();
            $table->string('improve_justification')->nullable();
            $table->string('adder_email')->nullable();
            $table->string('improve_investigation')->nullable();
            $table->string('attachmentby_investigator')->nullable();
            $table->string('approver_name')->nullable();
            $table->string('approver_email')->nullable();
            $table->string('reviewer_name')->nullable();
            $table->string('reviewer_email')->nullable();
            $table->string('approved_rej')->nullable();
            $table->string('rej_reason')->nullable();
            $table->string('corr_implement_status')->default('Not Started-0%')->nullable();
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
        Schema::dropIfExists('incident_reports');
    }
}
