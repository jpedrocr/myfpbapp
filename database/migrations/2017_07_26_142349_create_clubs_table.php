<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sourcecategory_id');
            $table->foreign('sourcecategory_id')->references('id')->on('sourcecategories');
            $table->unsignedInteger('source_id')->unique();
            $table->string('name');
            $table->string('alternative_name')->nullable();
            $table->string('image')->nullable();
            $table->date('founding_date')->nullable();
            $table->string('president')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('venue_id')->nullable();
            $table->foreign('venue_id')->references('id')->on('venues');
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
        Schema::drop('clubs');
    }
}
