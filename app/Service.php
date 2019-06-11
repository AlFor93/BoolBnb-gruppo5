<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
    'name' ,
    'description'
  ];

  function flats() {
    return $this->belongsToMany(Flat::class);
  }
}
