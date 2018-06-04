<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Model
{
    use Notifiable;

    public  function getPublishedPosts (){

        $posts =Post::all('published_at');
//            ->where('published_at','<=', Carbon::now())
//            ->get();
    }


    protected $fillables = [
        'title', 'excerpt', 'published_at',
    ];
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
