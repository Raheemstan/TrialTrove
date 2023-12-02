<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarParksTable extends Migration
{
    public function up()
    {
        Schema::create('car_parks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('car_park_name');
            $table->string('location');
            $table->integer('maximum_capacity');
            $table->uuid('operator_id');
            $table->foreign('operator_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_parks');
    }
}
