<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'first_name', 'last_name', 'phone_number','role_id', 'confirmed', 'confirmation_code',
		 'currency_type', 'profile_pic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function account()
    {
        return $this->hasOne('App\MainAccount', 'user_id');
    } 
    public function bank()
    {
        return $this->hasOne('App\BankAccount', 'user_id');
    } 
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }
    public function stakes(){
        return $this->hasMany('App\Stake', 'user_id');
    }
}
