<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectEmotionsAndUsers extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('emotions', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('emotions', function (Blueprint $table) {
            //ref: http://laravel.com/docs/migrations#dropping-indexes
            //combine tablename + fk field name + the word "foreign"
            $table->dropForeign('emotions_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
