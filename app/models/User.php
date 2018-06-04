<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ  вызов таблицы

//    public $table = 'user';


    public  function getPublishedPosts (){

        $users = User::all('published_at');
//            ->where('published_at','<=', Carbon::now())
//            ->get();
    }
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
