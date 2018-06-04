<?php

namespace App;
use App\Home;
use App\Description;
use Illuminate\Database\Eloquent\Model;

class HomeDec extends Model
{

    public  $table = 'home_decs';
    public function home () {
        // к нескольким моделям привязываем
        return $this->belongsToMany( 'App\Home');
    }


    public  function  descript() {
        return $this->belongsToMany('App\Description','HomeDecs','home_id','description_id');
//        return $this->hasMany('App\Description','descri`ptions_id','id');  // МЫ ОБРАЩАЕМСЯ К МОДЕЛИ  Description

    }

}
