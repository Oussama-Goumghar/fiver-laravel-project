<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeNewFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('type')->default(0)->after('remember_token');
            $table->boolean('approved')->default(0)->after('remember_token');
            $table->integer('deptid')->unsigend()->default(0)->after('remember_token');
            $table->integer('employeeid')->unsigned()->default(0)->after('remember_token');
            $table->integer('logdevices')->unsigned()->default(0)->after('remember_token');
            $table->string('profile_picture', 100)->nullable()->after('remember_token');
            $table->timestamp('user_joining_date')->nullable()->after('remember_token');
            $table->timestamp('last_seen')->nullable()->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
