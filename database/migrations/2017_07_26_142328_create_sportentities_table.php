<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportentities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sportentity_id')->nullable();
            $table->foreign('sportentity_id')->references('id')->on('sportentities');
            $table->string('sport_name')->nullable();
            $table->unsignedInteger('sourcecategory_id');
            $table->foreign('sourcecategory_id')->references('id')->on('sourcecategories');
            $table->unsignedInteger('source_id')->unique();
            $table->unsignedInteger('sportentitiable_id');
            $table->string('sportentitiable_type');
            $table->string('name');
            $table->string('alternative_name')->nullable();
            $table->string('image')->nullable();
            $table->string('president')->nullable();
            $table->string('technicaldirector')->nullable();
            $table->string('cadpresident')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
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
        Schema::drop('sportentities');
    }
}
