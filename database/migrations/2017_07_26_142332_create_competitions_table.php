<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sportentity_id');
            $table->foreign('sportentity_id')->references('id')->on('sportentities');
            $table->unsignedInteger('season_id');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->unsignedInteger('agegroup_id');
            $table->foreign('agegroup_id')->references('id')->on('agegroups');
            $table->unsignedInteger('competitionlevel_id');
            $table->foreign('competitionlevel_id')->references('id')->on('competitionlevels');
            $table->unsignedInteger('sourcecategory_id');
            $table->foreign('sourcecategory_id')->references('id')->on('sourcecategories');
            $table->unsignedInteger('source_id')->unique();
            $table->string('name');
            $table->string('alternative_name')->nullable();
            $table->string('image')->nullable();
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
        Schema::drop('competitions');
    }
}
