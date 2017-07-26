<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapistregistrationrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapistregistrationroles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('therapistregistration_id');
            $table->foreign('therapistregistration_id')->references('id')->on('therapistregistrations');
            $table->string('description');
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
        Schema::drop('therapistregistrationroles');
    }
}
