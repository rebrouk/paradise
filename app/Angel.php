<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Angel extends Model
{


    protected  $primariKey = 'id';
    public $incrementing = TRUE ;
    public  $timestamps = TRUE;
    protected $fillable = ['name','text'];
    protected $guarded = ['*'];

    protected $dates = ['deleted_at'];


    public function  user () {

        return $this->belongsTo('App\User');
    }


    public function  way () {

        return $this->hasOne('App\Way');
    }


    public  function  angel() {
        return $this->belongsTo('App\Angel');
    }


    public function  country()
    {
        // привязываем к одной модели
//        $tasks = User::all()->tasks;
        return $this->hasMany('App\Country','user_id','id');   // user_id
    }


}
