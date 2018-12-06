<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMatch extends Model
{
    protected $fillable = [ ];

     public function arbitrage()
     {
         return $this->belongsTo('App\Match', 'match_id');
     }
}
