<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Sponsor::insert([
          'type' => '24 ore',
          'price' => '2.99'
      ]);
      Sponsor::insert([
          'type' => '72 ore',
          'price' => '5.99'

      ]);
      Sponsor::insert([
          'type' => '168 ore',
          'price' => '12.99'

      ]);
    }
}
