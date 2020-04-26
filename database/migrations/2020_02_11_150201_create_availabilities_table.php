<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->increments('availabilityId');
            $table->string('employeeId')->length(4);
            $table->string('year')->length(4);
            $table->string('dayOfTheWeek')->length(10);
            $table->integer('startTime')->length(4);
            $table->integer('endTime')->length(4);
            $table->integer('roomNumber')->length(4);
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
        Schema::dropIfExists('availabilities');
    }
}
