<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sourcecategory_id');
            $table->foreign('sourcecategory_id')->references('id')->on('sourcecategories');
            $table->unsignedInteger('source_id')->unique();
            $table->unsignedInteger('license')->unique()->nullable();
            $table->string('coachgrade')->nullable();
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
        Schema::drop('coaches');
    }
}
