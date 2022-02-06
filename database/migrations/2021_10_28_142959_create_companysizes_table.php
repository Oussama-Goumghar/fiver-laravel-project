<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companysizes', function (Blueprint $table) {
            $table->id();
            $table->integer('compsize')->unsigned()->default(0);
            $table->string('name', 255);
            $table->string('email', 300);
            $table->integer('loginsperperson')->default(1);
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
        Schema::dropIfExists('companysizes');
    }
}
