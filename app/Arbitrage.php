<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitrage extends Model
{
    protected $dates = ['created_at', 'updated_at', 'closure'];

    public function arbitrageRequest()
    {
        return $this->hasMany('App\ArbitrageRequest', 'arbitrage_id');
    }
}
