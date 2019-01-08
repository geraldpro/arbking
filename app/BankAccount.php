<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    //
    protected $fillable = [
         'name', 'number','bank_id', 'user_id',
    ];
    
}
