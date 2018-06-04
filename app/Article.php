<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
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

//    public function  country()
//    {
//        // привязываем к одной модели
////        $tasks = User::all()->tasks;
//        return $this->belongsTo('App\Country');   // user_id
//    }


}
