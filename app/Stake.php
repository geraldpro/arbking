<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
    protected $fillable = [
       'match_id', 'stake_amount', 'yield_amount', 'user_id', 'liability_amount', 'status'
    ];
	public function match() {
		return $this->belongsTo('App\Match', 'match_id');
	}
}
