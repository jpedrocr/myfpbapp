<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('round_id');
            $table->foreign('round_id')->references('id')->on('rounds');
            $table->unsignedInteger('sourcecategory_id');
            $table->foreign('sourcecategory_id')->references('id')->on('sourcecategories');
            $table->unsignedInteger('source_id')->unique();
            $table->unsignedInteger('hometeam_id');
            $table->foreign('hometeam_id')->references('id')->on('teams');
            $table->unsignedInteger('outteam_id');
            $table->foreign('outteam_id')->references('id')->on('teams');
            $table->unsignedInteger('number')->nullable();
            $table->datetime('schedule')->nullable();
            $table->unsignedInteger('home_result')->nullable();
            $table->unsignedInteger('out_result')->nullable();
            $table->unsignedInteger('venue_id')->nullable();
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->string('status')->nullable();
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
        Schema::drop('games');
    }
}
