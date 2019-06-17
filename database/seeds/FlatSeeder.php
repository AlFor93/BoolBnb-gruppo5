<?php

use Illuminate\Database\Seeder;

class FlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Flat::class,20)->make()->each(function($flat){

                    // quando abbiamo una chiave esterna prima bisogna creeare(make) poi fare il imap_savebody
                    // senza chiaVE ESTERNA SI PUO FARE DIRETTAMENTE IL CREATE()



                    $user= App\User::inRandomOrder()->first();
                    $flat->user()->associate($user);
                    $flat->save();

                    $images = App\Image::inRandomOrder()->take(rand(1,5))->get();
                    $flat->images()->attach($images);


                    $services= App\Service::inRandomOrder()->take(rand(1,5))->get();
                    $flat->services()->attach($services);


                  });
    }
}
