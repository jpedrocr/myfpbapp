<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportagentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportagents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            $table->unsignedInteger('sportagentable_id');
            $table->string('sportagentable_type');
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
        Schema::drop('sportagents');
    }
}
