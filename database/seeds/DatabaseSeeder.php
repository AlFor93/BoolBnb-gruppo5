<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([

        UserSeeder::class,
        ServiceSeeder::class,
        SponsorSeeder::class,
        FlatSeeder::class,
        ImageSeeder::class,
        MessageSeeder::class

    ]);
    }
}
