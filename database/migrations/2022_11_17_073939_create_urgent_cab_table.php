<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgentCabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgent_cab', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('article_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('urgent_cab', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('article_id')->references('id')->on('articles');
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
        Schema::dropIfExists('urgent_cab');
    }
}
