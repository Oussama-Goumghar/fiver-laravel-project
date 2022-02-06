<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEducationToAuditorlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auditorlists', function (Blueprint $table) {
            $table->string('education',200)->after('user_id')->nullable();
            $table->string('edu_file')->after('education')->nullable();
			$table->string('exp_file')->after('experience')->nullable();
            $table->string('audit_exp',200)->after('exp_file')->nullable();
			$table->string('auditexp_file')->after('audit_exp')->nullable();
			$table->string('ceft_file')->after('certificate')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auditorlists', function (Blueprint $table) {
            $table->dropColumn('education');
            $table->dropColumn('edu_file');
			$table->dropColumn('exp_file');
            $table->dropColumn('audit_exp');
			$table->dropColumn('auditexp_file');
            $table->dropColumn('ceft_file');		
        });
    }
}
