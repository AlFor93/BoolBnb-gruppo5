<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
  protected $fillable = [
    'name' ,
    'number_of_rooms' ,
    'mq' ,
    'address' ,
  ];
}
