<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Composer\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * Get the phone record associated with the user.
     */
    public function phone()
    {
//        $phone = User::find(1)->phone;
        return $this->hasOne('App\Phone');
    }

    public function team()
    {
        return $this->hasMany('App\TeamUser');
    }


    public function id($id)
    {
        $user  = TeamUser::all();
        $this -> $user->id;
     }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
    // ПРЯМОЕ ОБРАЩЕНИЕ К ТАБЛИЦЕ  вызов таблицы

//    public $table = 'user';


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

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
    public function teamuser()
    {
        return $this->hasMany('App\TeamUser');
    }
}
