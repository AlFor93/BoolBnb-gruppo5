<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
      'filename',
      'img_file'
    ];

    function flat() {
      return $this->belongsTo(Flat::class);
    }
}
