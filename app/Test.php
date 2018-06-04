<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function test()
    {
        return $this->hasOne('App\Ego');
    }
}
