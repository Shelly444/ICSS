<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('lessonId');
            $table->string('lessonDay')->length(10);
            $table->integer('lessonTime')->length(4);
            $table->integer('lessonLength')->length(1);
            $table->string('employeeId')->length(4);
            $table->string('clientId')->length(4);
            $table->string('roomNumber')->length(4);
            $table->decimal('lessonFee');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
