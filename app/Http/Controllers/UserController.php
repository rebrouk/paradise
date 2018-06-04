<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Support\Facades\DB;
 use App\Http\Controllers\Controller;

use App\Home;
use Illuminate\Http\Request;


class UserController extends Controller
{
     public function index ()
     {



//         $users1 = Home::all();
////            dd($users);
//
//         $users1 = DB::table('homes')->get();
//
//         return view('tasks', ['tasks' => $users1]);

         $users = User::all();
//            dd($users);

         $users = DB::table('users')->get();

         return view('tasks', ['tasks' => $users]);


//         echo view('user.index');
//         $users = DB::table('user')->paginate(1);
//         $users->posts()->where('users', 1)->get();
//         return view('tasks',['tasks'=> $users]);
//         return view('user.index',['user'=> $users]);

     }

//    public function index(){
////    public function index(Post $postsModel){
//
//        $posts = Post::all();
////        dd($posts);
////        $posts = $postsModel ->getPublishedPosts();
////        $posts = Post::latest('id')-> get();
////        $posts = Post::latest('published_at')-> get();
////        $posts = Post::latest('published_at')
////        ->where('published_at','<=', Carbon::now())
////            ->get();
////        $posts =  getPublishedPosts;
//        echo 'Сука наконец первая страница!!!';
//        return view('post.index',['posts'=> $posts]);
//    }
//
//    public function create(){
//        return view ('post.create');
//    }


}
