<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{

    public  function  angel() {
        return $this->belongsTo('App\Angel');
    }



    public  function  user() {

        return $this->belongsTo('App\User');
    }




}
