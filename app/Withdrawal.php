<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    //
    protected $fillable = [
         'time_created', 'status', 'status_text', 'coin', 'amount', 'withdrawal_fee', 
         'wallet_address', 'user_id', 'withdrawal_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }    
}
