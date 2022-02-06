<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReviewedActionAtAndReviewedActionByInCorrectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correctives', function (Blueprint $table) {
            $table->timestamp('reviewed_action_at')->nullable()->after('is_deleted');
            $table->string('reviewed_action_by', 255)->nullable()->after('approvedby');
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
            $table->dropColumn('reviewed_action_at');
            $table->dropColumn('reviewed_action_by');
        });
    }
}
