<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Phone;
use App\User;
use App\Comment;

class RelationshipController extends Controller
{
        public function index (){

//            $user->posts()->where('active', 1)->get();

//            $phone = User::find(1)->phone;
//
//            $comments = Post::find(1)->comments()->where('title', 'foo')->first();
//
//            $comment = Comment::find(1);

//            echo $comment->post->title;

            echo 'привет';
        }
public function show (){

//            $user->posts()->where('active', 1)->get();

//            $phone = User::find(1)->phone;
//
//            $comments = Post::find(1)->comments()->where('title', 'foo')->first();
//
//            $comment = Comment::find(1);

//            echo $comment->post->title;

            echo 'пока';
        }

}
