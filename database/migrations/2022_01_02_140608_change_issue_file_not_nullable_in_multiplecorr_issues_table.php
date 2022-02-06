<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIssueFileNotNullableInMultiplecorrIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('multiplecorr_issues', function (Blueprint $table) {
            $table->text('issue_file')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('multiplecorr_issues', function (Blueprint $table) {
            $table->text('issue_file')->nullable()->change();
        });
    }
}
