<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 12.04.2018
 * Time: 12:09
 */
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\models\Post;
//use Carbon\Carbon;

class  PostController extends  Controller
{
    /*
     *
     * @return Response
     */
    public function index(){
//    public function index(Post $postsModel){

        $posts = Post::all();
        $DB = Post::all();


//        dd($posts);
//        $posts = $postsModel ->getPublishedPosts();
//        $posts = Post::latest('id')-> get();
//        $posts = Post::latest('published_at')-> get();
//        $posts = Post::latest('published_at')
//        ->where('published_at','<=', Carbon::now())
//            ->get();
//        $posts =  getPublishedPosts;
        echo 'Сука наконец первая страница!!!';
        return view('post.index',['posts'=> $posts]);

            // обращается к пост, присваивается новое имя и вызывается эхом
 //        $titles = $posts;
//        foreach ($titles as $title) {
//            echo $title;
//        }

//        $post = Post::table('posts')->where('name', 'John')->first();

//        echo $post->name;
    }

    public function create(){
    return view ('post.create');
    }


//    public function store(Post $posts, Request $request){
//
////        dd($request->all());
//        $posts ->create($request->all());
//        return redirect()->route ('posts');
//
//    }

//public function unpublished(Post $posts, Request $request){
////
//////        dd($request->all());
//        $posts = getUnPublishedPost();
////        return redirect()->route ('posts');
////
//    }


    public function show($id){
        echo 1231;
        return view ('post.post');

    }

    public function edit($id){

    }


    public function update($id){

    }


    public function destroy($id){

    }
}