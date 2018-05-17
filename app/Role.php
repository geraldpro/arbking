<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function account()
    {
        return $this->hasOne('App\User', 'role_id');
    }
}
