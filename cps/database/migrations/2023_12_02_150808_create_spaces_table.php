<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('car_park_id');
            $table->string('space_number');
            $table->string('space_type');
            $table->string('status');
            $table->decimal('rate', 10, 2);
            $table->foreign('car_park_id')->references('id')->on('car_parks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spaces');
    }
}
