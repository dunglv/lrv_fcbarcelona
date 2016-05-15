<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('number');
            $table->string('avatar', 100);
            $table->string('position', 50);
            $table->integer('height');
            $table->integer('width');
            $table->datetime('date_of_birth');
            $table->string('place_of_birth', 100);
            $table->text('personal_bio');
            $table->integer('status')->default(0);
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
        Schema::drop('fc_players');
    }
}
