<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedTo100AtAndUpdatedTo100ByInCorrectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correctives', function (Blueprint $table) {
            $table->timestamp('updated_to_100_at')->nullable()->after('is_deleted');
            $table->string('updated_to_100_by', 255)->nullable()->after('approvedby');
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
            $table->dropColumn('updated_to_100_at');
            $table->dropColumn('updated_to_100_by');
        });
    }
}
