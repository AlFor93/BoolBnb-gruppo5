<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
  protected $fillable = [
    'type' ,
    'sponsor_price'
  ];

  function flats() {
    return $this->belongsToMany(Flat::class);
  }
}
