<?php

use Illuminate\Database\Seeder;
use App\Sponsor;
use App\Flat;

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

                    $services= App\Service::inRandomOrder()->take(rand(1,5))->get();
                    $flat->services()->attach($services);

                    $random=rand(0,1);
                    if ($random) {
                      $sponsor=Sponsor::inRandomOrder()->first();
                      $flat->sponsors()->attach($sponsor);

                    }



                  });
    }
}
