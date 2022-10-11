<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('house_name', 50);
            $table->string('front_image')->nullable();
            $table->string('interior_image1')->nullable();
            $table->string('interior_image2')->nullable();
            $table->string('plan_image1')->nullable();
            $table->string('plan_image2')->nullable();
            $table->string('floor_plan');
            $table->string('age');
            $table->string('land_area');
            $table->string('building_area');
            $table->string('address');
            $table->string('detail');
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
        Schema::dropIfExists('houses');
    }
}
