<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProposedByAndProposedAtInCorrectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correctives', function (Blueprint $table) {
            $table->string('proposedby')->nullable()->after('approvedby');
            $table->timestamp('proposed_at')->nullable()->after('is_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('correctives', function (Blueprint $table) {
            $table->dropColumn('proposedby');
            $table->dropColumn('proposed_at');
        });
    }
}
