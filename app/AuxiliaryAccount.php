<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryAccount extends Model
{
    protected $fillable = [
       'user_id', 'deposited_amount', 'shield_amount', 'total_amount', 'threshold_amount', 'staked_amount', 'account_status'
    ];
    public function account()
    {
        return $this->belongsTo('App\MainAccount', 'main_account_id');
    }
}
