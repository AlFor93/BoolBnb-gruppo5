<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
  protected $fillable = [
    'name' ,
    'number_of_rooms' ,
    'mq' ,
    'address'
  ];

  function user() {
    return $this->belongsTo(User::class);
  }

  function images() {
    return $this->hasMany(Image::class);
  }

  function services() {
    return $this->belongsToMany(Service::class);
  }


}
