<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
    'title' ,
    'content'
  ];

  function flat() {
    return $this->belongsTo(Flat::class);
  }
}
