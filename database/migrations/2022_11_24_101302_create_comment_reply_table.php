<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_reply', function (Blueprint $table) {
            $table->id();
            $table->text('replied_text');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('comment_id')->unsigned();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
        Schema::table('comment_reply', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('comment_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_reply');
    }
}
