<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('search_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('search_tags', function($table) {
            $table->foreign('search_id')->references('id')->on('my_research');
            $table->foreign('tag_id')->references('id')->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_tags');
    }
}
