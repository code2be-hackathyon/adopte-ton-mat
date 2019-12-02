<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OtherUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('forename');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_users');
        Schema::create('other_users', function (Blueprint $table) {
            $table->dropForeign('other_users_users_id_foreign');
        });
    }
}
