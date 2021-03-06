<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('url');
            $table->text('description');
            $table->text('content');
            $table->datetime('date_created');
            $table->datetime('date_updated');
            $table->integer('rate')->default(0); // Vote to quality of article
            $table->integer('views')->default(0);
            $table->integer('lock_cmt')->default(0);
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
         Schema::table('articles', function(Blueprint $table){
            $table->dropForeign('articles_user_id_foreign');
        });
        Schema::dropIfExists('articles');
    }
}
