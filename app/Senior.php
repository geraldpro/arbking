<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senior extends Model
{
    //
  public function stakes()
    {
        return $this->hasMany('App\Junior', 'senior_id');
    }
}
