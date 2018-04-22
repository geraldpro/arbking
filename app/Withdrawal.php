<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    //
    protected $fillable = [
         'admin_id', 'amount','status', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }    
}
