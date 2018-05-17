<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
       'type', 'amount', 'bonus', 'user_id', 'ref'
    ];
    public function user() {
		return $this->belongsTo('App\User', 'user_id');
	}
}