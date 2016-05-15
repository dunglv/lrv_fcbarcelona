<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password', 100);
            $table->string('email', 100);
            $table->string('first_name', 100);
            $table->string('last_name', 50);
            $table->datetime('date_join');
            $table->integer('author');
            $table->integer('status');
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
        Schema::drop('fc_users');
    }
}
