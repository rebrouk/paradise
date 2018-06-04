<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function teams()
    {
        return $this->hasMany('App\TeamUser');
    }
}
