<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_matches', function(Blueprint $table){
            $table->increments('id');
            $table->string('team', 100);
            $table->string('stadium', 100);
            $table->text('description');
            $table->datetime('datetime_start');
            $table->string('flag')->default('this.jpg');
            $table->integer('home')->default(0);
            $table->string('league', 100);
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
        Schema::drop('fc_matches');
    }
}
