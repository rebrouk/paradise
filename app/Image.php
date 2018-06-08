<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'title', 'img'
    ];
    public function user()
    {
        return $this->hasOne('App\User' , 'id', 'user_id');
    }
}
