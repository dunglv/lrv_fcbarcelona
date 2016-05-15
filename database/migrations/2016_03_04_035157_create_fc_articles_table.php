<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFcArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fc_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cate');
            $table->integer('id_user');
            $table->string('title', 100);
            $table->string('alias', 500);
            $table->text('description');
            $table->text('content');
            $table->datetime('date_created');
            $table->datetime('date_updated');
            $table->string('tags', 500);
            $table->integer('views')->default(0);
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
        Schema::drop('fc_articles');
    }
}
