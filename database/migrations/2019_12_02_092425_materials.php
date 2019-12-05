<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('reference');
            $table->longText('tech_sheet');
            $table->bigInteger('association_id')->unsigned()->index();
            $table->unsignedBigInteger('sub_category_id')->index();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materials');
        Schema::table('materials', function (Blueprint $table) {
        $table->dropForeign('materials_association_id_foreign');
        });
    }
}
