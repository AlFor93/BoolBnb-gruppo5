<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Service::insert([
          'name' => 'wi-fi'
      ]);
      Service::insert([
          'name' => 'parcheggio'
      ]);
      Service::insert([
          'name' => 'lavatrice'
      ]);
      Service::insert([
          'name' => 'televisore'
      ]);
      Service::insert([
          'name' => 'aria condizionata'
      ]);
      Service::insert([
          'name' => 'fumatori'
      ]);
      Service::insert([
          'name' => 'macchina del caffè'
      ]);
      Service::insert([
          'name' => 'giardino'
      ]);
      Service::insert([
          'name' => 'piscina'
      ]);
      Service::insert([
          'name' => 'animali'
      ]);
    }
}
