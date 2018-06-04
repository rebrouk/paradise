<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model
{
    public function user()
    {
        return $this->hasOne('App\User' , 'id', 'user_id');
    }
    public function teams()
    {
        return $this->belongsTo('App\Team' ,'team_users', 'user_id', 'teams_id');
    }

    public function news()
    {

        return $this->belongsToMany('App\News', 'new_tests', 'news_id', 'tests_id');
    }
    public function tests()
    {

        return $this->belongsToMany('App\Test', 'new_tests', 'tests_id', 'news_id');
    }

}
