<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

 use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Model
{
    // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ  вызов таблицы

//    public $table = 'user';
//
//
//    public  function getPublishedPosts (){
//
//        $users = User::all('published_at');
////            ->where('published_at','<=', Carbon::now())
////            ->get();
//    }
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
}
