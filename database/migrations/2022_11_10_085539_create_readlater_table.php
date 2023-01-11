<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadlaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readlater', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('readlater', function($table) {
           $table->foreign('article_id')->references('id')->on('articles');
           $table->foreign('user_id')->references('id')->on('users');
           $table->unique(['article_id', 'user_id']);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readlater');
    }
}
