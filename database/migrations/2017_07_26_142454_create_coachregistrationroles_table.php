<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachregistrationrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coachregistrationroles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coachregistration_id');
            $table->foreign('coachregistration_id')->references('id')->on('coachregistrations');
            $table->unsignedInteger('competitionlevel_id')->nullable();
            $table->foreign('competitionlevel_id')->references('id')->on('competitionlevels');
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
        Schema::drop('coachregistrationroles');
    }
}
