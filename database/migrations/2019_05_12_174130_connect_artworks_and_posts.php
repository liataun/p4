<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectArtworksAndPosts extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('artwork_id')->unsigned()->nullable();
            $table->foreign('artwork_id')->references('id')->on('artworks');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //ref: http://laravel.com/docs/migrations#dropping-indexes
            //combine tablename + fk field name + the word "foreign"
            $table->dropForeign('posts_artwork_id_foreign');
            $table->dropColumn('artwork_id');
        });
    }
}
