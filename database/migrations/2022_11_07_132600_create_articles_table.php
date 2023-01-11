<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('initial_research');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('subcat_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('articles', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('category');
            $table->foreign('subcat_id')->references('id')->on('subcategory');
            $table->foreign('day_id')->references('id')->on('days');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
