<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
    'content',
    'sender',
    'sent_date'
  ];

  function flat() {
    return $this->belongsTo(Flat::class);
  }
  function user(){
    return $this->belongsTo(User::class);
  }
}
