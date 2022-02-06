<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correctives', function (Blueprint $table) {
            $table->id();
            $table->integer('count')->default('0')->nullable('true');
            $table->string('issueid')->nullable('true');
            $table->integer('category')->unsigned()->default(1);
            $table->integer('type')->unsigned()->default(1);
            $table->integer('department')->unsigned();
            $table->string('title');
            $table->string('file')->nullable('true');
            $table->string('action_file', 500)->nullable();
            $table->text('observation');
            //$table->string('postdate')->nullable('true');
            $table->date('duedate')->nullable();
            $table->integer('year')->nullable();
            $table->text('agreedaction')->nullable();
            $table->text('rootcause')->nullable();
            $table->text('correctiveaction')->nullable();
            $table->text('correction')->nullable();
            $table->string('status')->default('NULL');
            $table->string('postedby')->nullable();
            $table->string('responsibility')->nullable();
            $table->text('notification')->nullable();
            $table->string('processstage', 250)->default('Under Review');
            $table->string('approvement')->nullable();
            $table->string('impl_status', 500)->default('Not Started-0%')->nullable();
            $table->text('remarks')->nullable();
            $table->text('action_remarks')->nullable();
            $table->date('closed')->nullable();
            $table->string('active')->default('yes');
            $table->string('approvedby')->nullable();
            $table->string('closedby')->nullable();
            $table->string('frequency')->nullable();
            $table->date('Monthlyfreq')->nullable();
            $table->date('Weeklyfreq')->nullable();
            $table->integer('Dayfreq')->default('0');
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
        Schema::dropIfExists('correctives');
    }
}
