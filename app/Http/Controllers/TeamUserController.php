<?php

namespace App\Http\Controllers;

use App\TeamUser;
use App\User;
use Illuminate\Http\Request;

class TeamUserController extends Controller
{
    public function index()
    {
//        User::findOrFail($id);
//         User::id();
//        $users  = User::all();
//        $users = $user->team;
//        $name = $users;
//        echo "<br>" . " это статья номер  " ;
//            dd($users);
//        echo $users;
//        foreach  ($users  as $user){
//            echo $users;
//        }
        $teamusers  = TeamUser::all();
//        $users  = TeamUser::find(1);
//        $users = $user->user;
//        foreach  ($users  as $user){
//            echo $user ."<br>";
//        }
//        $name = $users->name;
//        echo "<br>" . " это статья номер  " ;
//            dd($users);
//        $products = Product::all();
//        return view('home', ['products' => $products]);
        return view('fasad.index', ['teamusers' => $teamusers]);
//        return view('fasad.index');

    }

    public function show($id)
    {      // ПЕРЕХОДИТЬ НА ID ЭТОЙ ТАЛИЦЫ \
        //И ВЫВОДИТ ОПИСАНЕЕ О КОМАНДЕ
        echo "<br>" . " это   " .$id;

        return view('fasad.index', ['users' => TeamUser::findOrFail($id)]); // descrip  МОЖНО ИСПОЛЬЗОВАТЬ ЧТО БЫ ВЫЗВАТЬ ИЗ ТАБЛИЦЫ НУЖНЫЕ ДАННЫЕ ОБРАЩАЯСЬ ЧЕРЕЗ ДОПУСТИМ  {!! $news->id !!} ИЛИ ЧЕРЕЗ fOREACH
//
    }

    public function getUsers()
    {
        $users = TeamUser::all();

        return response()->json([
            'ok' => true,
            'view' => view('team_users', compact('users'))->render()
        ]);
}
}