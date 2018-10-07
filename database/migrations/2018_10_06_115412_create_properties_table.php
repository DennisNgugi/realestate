<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_name');
            $table->integer('property_purpose_id')->unsigned();
            $table->foreign('property_purpose_id')->references('id')->on('property_purposes');
            $table->integer('property_type_id')->unsigned();
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('price');
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garage')->nullable();
            $table->string('description');
            $table->string('featured_image');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('properties');
    }
}
