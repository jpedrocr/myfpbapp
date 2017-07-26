<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('phase_id');
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->unsignedInteger('source_id')->unique();
            $table->unsignedInteger('position');
            $table->unsignedInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->unsignedInteger('games')->default(0);
            $table->unsignedInteger('victories')->default(0);
            $table->unsignedInteger('defeats')->default(0);
            $table->unsignedInteger('missing')->default(0);
            $table->unsignedInteger('scored')->default(0);
            $table->unsignedInteger('suffered')->default(0);
            $table->integer('diference')->default(0);
            $table->unsignedInteger('points')->default(0);
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
        Schema::drop('classifications');
    }
}
