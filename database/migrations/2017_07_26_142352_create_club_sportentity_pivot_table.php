<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubSportentityPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_sportentity', function (Blueprint $table) {
            $table->integer('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('sportentity_id')->unsigned()->index();
            $table->foreign('sportentity_id')->references('id')->on('sportentities')->onDelete('cascade');
            $table->primary(['club_id', 'sportentity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('club_sportentity');
    }
}
