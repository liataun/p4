<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkTagTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('artwork_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('artwork_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();

            # Make foreign keys
            $table->foreign('artwork_id')->references('id')->on('artworks');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artwork_tag');
    }
}
