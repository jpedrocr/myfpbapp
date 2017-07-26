<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coachregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coach_id');
            $table->foreign('coach_id')->references('id')->on('coaches');
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
        Schema::drop('coachregistrations');
    }
}
