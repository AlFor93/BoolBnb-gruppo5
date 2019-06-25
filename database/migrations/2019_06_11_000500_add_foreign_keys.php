<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('flats', function (Blueprint $table){
        $table->foreign('user_id' , 'user')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');

      });

      Schema::table('flat_service', function (Blueprint $table){
        $table->foreign('flat_id' , 'flatS')
              ->references('id')
              ->on('flats')
              ->onDelete('cascade');

        $table->foreign('service_id' , 'service')
              ->references('id')
              ->on('services')
              ->onDelete('cascade');
      });


      Schema::table('images', function (Blueprint $table){

        $table->foreign('flat_id' , 'flatI')
              ->references('id')
              ->on('flats')
              ->onDelete('cascade');
      });

      Schema::table('messages', function (Blueprint $table){

        $table->foreign('flat_id' , 'flatM')
        ->references('id')
        ->on('flats')
        ->onDelete('cascade');
      });

      Schema::table('flat_sponsor', function (Blueprint $table){
        $table->foreign('flat_id' , 'flatSp')
              ->references('id')
              ->on('flats')
              ->onDelete('cascade');

        $table->foreign('sponsor_id' , 'sponsor')
              ->references('id')
              ->on('sponsors')
              ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('flat_sponsor' , function(Blueprint $table){

        $table->dropForeign('flatSp');
        $table->dropColumn('flat_id');
        $table->dropForeign('sponsor');
        $table->dropColumn('sponsor_id');

      });

      Schema::table('messages' , function(Blueprint $table){

        $table->dropForeign('flatM');
      });

      Schema::table('images' , function(Blueprint $table){

        $table->dropForeign('flatI');
      });

      Schema::table('flat_service' , function(Blueprint $table){

        $table->dropForeign('service');
        $table->dropForeign('flatS');
      });

      Schema::table('flats' , function(Blueprint $table){

        $table->dropForeign('user');
      });

    }
}
