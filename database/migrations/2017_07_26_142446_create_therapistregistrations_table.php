<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapistregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapistregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('therapist_id');
            $table->foreign('therapist_id')->references('id')->on('therapists');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->unsignedInteger('season_id');
            $table->foreign('season_id')->references('id')->on('seasons');
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
        Schema::drop('therapistregistrations');
    }
}
