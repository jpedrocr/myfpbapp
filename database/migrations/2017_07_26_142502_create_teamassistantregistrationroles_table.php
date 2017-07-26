<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamassistantregistrationrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamassistantregistrationroles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teamassistantregistration_id');
            $table->foreign('teamassistantregistration_id', 'taregroles_tareg_id_foreign')->references('id')->on('teamassistantregistrations');
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
        Schema::drop('teamassistantregistrationroles');
    }
}
