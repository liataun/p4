<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->text('label');
            $table->string('path');
            $table->string('alt_text');
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
}
