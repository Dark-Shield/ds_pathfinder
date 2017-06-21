<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
  public static function scopeGetSoldierInfo($query) {
    return $query->where('soldier',0);
  }
}
