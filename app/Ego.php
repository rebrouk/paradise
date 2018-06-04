<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ego extends Model
{
    public function index () {


        $egos = Ego::orderBy('created_at', 'asc')->get();

        return view('egos', [
            'egos' => $egos
        ]);



    }


    /**
     * Получить пользователя, владеющего данным телефоном.
     */
    public function test()
    {
        return $this->belongsTo('App\Test');
    }

//    public function task()
//    {
//        return $this->hasOne('App\Task');
//    }
}
