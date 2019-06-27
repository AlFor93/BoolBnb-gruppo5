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
      $flats=Flat::all();

        foreach ($flats as $flat) {

          factory(App\Image::class,4)->make()->each(function($image)use($flat){

            $image-> flat()-> associate($flat);
            $image->save();
          });
        }




    }
}
