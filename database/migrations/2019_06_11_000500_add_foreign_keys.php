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
              ->on('users');

      });



      Schema::table('flat_service', function (Blueprint $table){
        $table->foreign('flat_id' , 'flat')
              ->references('id')
              ->on('flats');

        $table->foreign('service_id' , 'service')
              ->references('id')
              ->on('services');
      });

      Schema::table('images', function (Blueprint $table){

        $table->foreign('flat_id' , 'flat2')
              ->references('id')
              ->on('flats');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
