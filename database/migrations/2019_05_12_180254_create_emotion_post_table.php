<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmotionPostTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('emotion_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('emotion_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();

            # Make foreign keys
            $table->foreign('emotion_id')->references('id')->on('emotions');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emotion_post');
    }
}
