<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public  function  homedec() {
        return $this->hasMany('App\HomeDec');
    }



//    public  function  descript() {
//
////        return $this->belongsTo('App\Description');
//        return $this->hasMany('App\Description');
//    }


}
