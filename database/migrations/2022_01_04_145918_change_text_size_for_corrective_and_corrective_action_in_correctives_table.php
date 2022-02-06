<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTextSizeForCorrectiveAndCorrectiveActionInCorrectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correctives', function (Blueprint $table) {
            $table->text('correctiveaction')->change();
            $table->text('correction')->change();
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
            $table->string('correctiveaction', 1000)->change();
            $table->string('correction', 1000)->change();
        });
    }
}
