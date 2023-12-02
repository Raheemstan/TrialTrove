<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('car_park_id');
            $table->dateTime('booking_date_time');
            $table->dateTime('entry_date_time');
            $table->dateTime('exit_date_time');
            $table->string('payment_status');
            $table->string('booking_status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('car_park_id')->references('id')->on('car_parks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
