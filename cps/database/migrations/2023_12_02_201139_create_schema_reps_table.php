<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schema_reps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('car_park_id');
            $table->string('schematic_image');
            $table->string('status');
            $table->string('labels');
            $table->foreign('car_park_id')->references('id')->on('car_parks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schema_reps');
    }
};
