<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{

    /**
     * Get the user that owns the phone.
     */
//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }

    public function user()
    {
        return $this->belongsTo('App\User')->withDefault([
            'name' => 'Guest Author',
        ]);
    }

    /**
     * Get the author of the post.
     */
//    public function user()
//    {
//        return $this->belongsTo('App\User')->withDefault(function ($user) {
//            $user->name = 'Guest Author';
//        });
//    }
}
