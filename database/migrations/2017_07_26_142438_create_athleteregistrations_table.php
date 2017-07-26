<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athleteregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('athlete_id');
            $table->foreign('athlete_id')->references('id')->on('athletes');
            $table->unsignedInteger('club_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->unsignedInteger('season_id');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->unsignedInteger('agegroup_id')->nullable();
            $table->foreign('agegroup_id')->references('id')->on('agegroups');
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
        Schema::drop('athleteregistrations');
    }
}
