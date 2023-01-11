<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_research', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('subcat_id')->unsigned();
            $table->bigInteger('day_id')->unsigned();
            //$table->bigInteger('tag_id')->unsigned();
            $table->string('initial_research');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
        Schema::table('my_research', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('category');
            $table->foreign('subcat_id')->references('id')->on('subcategory');
            //$table->foreign('tag_id')->references('id')->on('tag');
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
        Schema::dropIfExists('my_research');
    }
}
