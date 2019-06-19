<?php

use Illuminate\Database\Seeder;
use App\Flat;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Image::class,20)->make()->each(function($image){

          $flat = App\Flat::inRandomOrder()->first();
          $image-> flat()-> associate($flat);
          $image->save();
        });

    }
}
