<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renovations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concept');
            $table->string('renovation_image1');
            $table->string('renovation_image2');
            $table->string('renovation_image3');
            $table->string('renovation_image4');
            $table->string('renovation_detail');
            $table->integer('house_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renovations');
    }
}
