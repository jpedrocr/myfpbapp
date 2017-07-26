<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamassistantregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamassistantregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teamassistant_id');
            $table->foreign('teamassistant_id')->references('id')->on('teamassistants');
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
        Schema::drop('teamassistantregistrations');
    }
}
