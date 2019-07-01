<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
  protected $fillable = [
    'flat_name' ,
    'number_of_rooms' ,
    'mq' ,
    'address',
    'city'
  ];

  function user() {
    return $this->belongsTo(User::class);
  }

  function services() {
    return $this->belongsToMany(Service::class);
  }

  function images() {
    return $this->hasMany(Image::class);
  }

  function messages() {
    return $this->hasMany(Message::class);
  }

  function sponsors() {
    return $this->belongsToMany(Sponsor::class);
  }

}
