<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('clientId');
            $table->string('clientFirstName');
            $table->string('clientLastName');
            $table->string('clientRegistrationDate');
            $table->string('clientProgram');
            $table->string('clientSpecialilty');
            $table->string('clientSocialMediaStatus');
            $table->string('clientGuardianFirstName');
            $table->string('clientGuardianLastName');
            $table->string('clientGuardianContactNumber');
            $table->string('clientGuardianEmail');
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
        Schema::dropIfExists('clients');
    }
}

