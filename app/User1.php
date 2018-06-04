<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



//    public function  task()
//    {
//
//        $tasks = User::all()->tasks;
//        return $this->hasOne('App\Task');
//    }

    public function  country()
    {
        // привязываем к одной модели
//        $tasks = User::all()->tasks;
        return $this->hasOne('App\Country','user_id','id');   // user_id
    }


    public function articless () {
        // к нескольким моделям привязываем
        return $this->hasMany ('App\Article');
    }


    public  function  roles() {
        return $this->belongsToMany('App\Role');

    }

    public  function  test() {
        return $this->hasMany('App\Test');
    }

    public  function  angel() {
        return $this->hasMany('App\Angel');
    }


    public  function  star() {
        return $this->hasMany('App\Angel');
    }



}



