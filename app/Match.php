<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
  protected $fillable = [
       'home_team', 'away_team', 'league', 'kickoff', 'current', 'selected_market', 'selected_odd'
  ];
  public function stakes()
    {
        return $this->hasMany('App\Stake', 'match_id');
    }
    public function groupMatch()
    {
        return $this->hasMany('App\GroupMatch', 'group_id');
    } 
  protected $dates = array('kickoff');
}
