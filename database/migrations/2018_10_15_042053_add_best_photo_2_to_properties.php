<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBestPhoto2ToProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('properties', function (Blueprint $table) {
          $table->string('best_photo_2')->nullable()->after('best_photo_1');
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
          $table->dropColumn('best_photo_2');
      });
    }
}
