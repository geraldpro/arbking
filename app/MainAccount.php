<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    protected $fillable = [
       'user_id', 'deposited_amount', 'shield_amount', 'total_amount', 'threshold_amount', 'staked_amount', 'staked_amount', 'withdrawable_amount', 'account_status'
    ];
    public function auxiliary()
    {
        return $this->hasOne('App\AuxiliaryAccount', 'main_account_id');
    }
}
