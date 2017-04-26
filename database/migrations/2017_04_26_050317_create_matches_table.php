<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_one')->default('Lorem ispum dolor sit amet');
            $table->string('flag_one');
            $table->integer('goal_one')->default(0);
            $table->string('team_two')->default('Lorem ispum dolor sit amet');
            $table->string('flag_two');
            $table->integer('goal_two')->default(0);
            $table->string('stadium');
            $table->string('home')->default(1); // 1: team 1 - 2: team 2
            $table->string('league')->default('Laliga'); //
            $table->datetime('datetime_start');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('matches');
    }
}
