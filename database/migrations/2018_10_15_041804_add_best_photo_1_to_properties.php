<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBestPhoto1ToProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('properties', function (Blueprint $table) {
          $table->string('best_photo_1')->nullable()->after('featured_image');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('properties', function (Blueprint $table) {
          $table->dropColumn('best_photo_1');
      });
    }
}
