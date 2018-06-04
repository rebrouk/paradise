<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {

//        $comments = App\Post::find(1)->comments;
//
//        foreach ($comments as $comment) {
//            //
//        }
        return $this->hasMany('App\Comment');
    }
}
