<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sapNumber');
            $table->string('email');
            $table->string('mobile');
            $table->string('year');
            $table->string('classDivision');
            $table->string('building');
            $table->longText('address1');
            $table->longText('address2');
            $table->string('locality');
            $table->string('pincode');
            $table->string('UID');
            $table->primary('UID');	

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
        Schema::dropIfExists('user_registration');
    }
}
