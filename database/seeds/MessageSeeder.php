<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Message::class,30)->make()->each(function($message){

        $flat = App\Flat::inRandomOrder()->first();
        $user = $flat->user_id;


        $message-> flat()-> associate($flat);
        $message-> user()-> associate($user);
        $message->save();

      });
    }
}
