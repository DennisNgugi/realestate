<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email');
          $table->string('mobile')->nullable();
          $table->string('property_name');
          $table->integer('property_type')->unsigned();
          $table->foreign('property_type')->references('id')->on('property_types')->onDelete('cascade')->onUpdate('cascade');
          $table->integer('property_purpose')->unsigned();
          $table->foreign('property_purpose')->references('id')->on('property_purposes')->onDelete('cascade')->onUpdate('cascade');
          $table->string('location')->nullable();
          $table->string('address')->nullable();
          $table->text('description');
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
        Schema::dropIfExists('enquiries');
    }
}
