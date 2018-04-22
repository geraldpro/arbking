<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleApplication extends Model
{
    //
    protected $fillable = [
         'email',  'first_name', 'last_name', 'role_id', 'confirmed', 'confirmation_code',
    ];
}
