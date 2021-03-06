<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditorlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id');
            $table->string('experience',200);
            $table->string('certificate')->nullable();
            $table->boolean('is_deleted')->default(false);           
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auditorlists');
    }
}
