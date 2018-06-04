<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public  function  desc() {
        return $this->belongsTo('App\HomeDec');
    }


 public  function  descriptions() {
        return $this->belongsTo('App\Home');
    }



//    public  function  home() {
//
//        return $this->belongsTo('App\HomeDec');
//    }


}
