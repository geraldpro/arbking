<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArbitrageRequest extends Model
{
    protected $fillable = [ ];

     public function arbitrage()
     {
         return $this->belongsTo('App\Arbitrage', 'arbitrage_id');
     }
}
