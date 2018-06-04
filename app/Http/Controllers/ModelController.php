<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\User;
use App\DB;
use App\Article;
use App\Country;
use App\Modeli;
use App\Http\Requests;

class ModelController extends Controller
{


    protected static $articles;

    public function  __construct()
    {

    }
    public static function  addArticles ($array) {
        return self::$articles [] = $array;
    }





    public function artik()
    {       //////// ЕСИ НУЖНО ПРИВЯЗАТЬ 2 ПОЛЬЗОВАТЕЛЯ ДОПУСТИМ К ЗНАЧЕНИЯМ 1 ПОЛЬЗОВАТЕЛЯ
//        $country = Country::find(1);
//        $user = User::find(3);
//
//        $country ->user()->associate($user);
//        $country->save ();
        /////////////////////////// ЭТО ЗАХВАТЫВАЕТ СРАЗУ ВСЕ СТРОКИ ТАБЛИЦЫ ИЗМЕНЯЯ ИХ ИД
        $articles = Article::all();
        $user = User::find(3);
        foreach ($articles as $article){

            $article->user()->associate($user);
            $article->save();
        }
        return;
    }






    public  function  Articles (Request $request) {

//        $country = Country::find(1);

//        $user = User::find(2);
//        $user = User::find(1);

//        $country = $user->country;


//        $articles = $user->articles;

//        $article = Article::find(4);

//        foreach ($articles as $article) {
//            echo $article->name . '<br>';
//        }
//
        // многие ко многим
//        foreach ($user->roles as $role) {
//            echo $role->name . '<br>';
//        }

//        $role = Role::find(1);
//        dump($role->users);

//        dump($articles->user->name);
//        dump($articles->role);
/////////////////////////////////////////
//        $users = User::with('articles','roles')->get();
//        $users = User::has('articles','>=','3')->get(); //выбирает три и более статьи выбирает
        // жадная загрузка
//            $articles = Article::with('user')->get () ;
        // ленивая загрузка это 2 способ но он делает больше запросов чем 1
//            $articles = Article::all();
//            $articles->load('user') ;
//            foreach ($users as $article) {
//
//                echo $article->user->name . '<br>';
//            }
/////////////////////////////////////////////////////////
/// ДОБАВЛЯЕТ ИНФОРМАЦИЮ В ТАЛИЦЫ
        $user = User::find(1);
//        $article = new Article ([
//            'name' => 'New Article',
//            'text' => "Some text",
//        ]);
//
//        $user->articles()->save();

//        return;

// 2 способ ЭТО ДЛЯ СОХРАНЕНИЯ ЗНАЧЕНИЙ В ТАБЛИЦУ ПОКА ПОСЛЕ ДОБАВЛЕНИЯ ОНА ПОЯВЛЯЕТСЯ В ТАБЛИЦЕ
        $user-> articles()->create([
            'name' => 'New Article',
            'remember_token' => "Some text",
        ]);
        ;$article = Article::all();
        dump ($article);
////////////////////////////

//        $role =new Role(['name' => 'guest']);
//        $user->roles()->save($role);
////////////////////////////
/// МОЖНО ПОМЕНЯТЬ ЗНАЧЕНИЕ ТЕКСТА ВНУТРИ ТУБЛИЦ В ДАННОМ ПРИМЕРЕ
/// ОН НАХОДИТ ИД ТЕКС И ЗАМЕНЯЕТ  ЕГО NEW TEXT НО МЕНЯЕТСЯ ТОЛЬКО
        $user = User::find(1);// только ЕСЛИ ЭТОТ ПОЛЬЗОВАТЕЛЬ СОЗДАЛ ЭТУ ТАБЛИЦУ ИНАЧЕ ОШИБКА
//        $user-> articles()->create([
//            'name' => 'New Article',
//            'remember_token' => "Some text",
//        ]);
        $user->articles()->where('id',24)->update(['name' => 'NEW TEXT']);
        dump ($article);
////////////////////////////

        return;



    }




    public function index()
    {

        echo 'это вызов из роута который обращается к файлу ';
        echo "<br>";
//        return view('function.index');
    }
//
//
//    public function store(Request $request)
//    {
//        // Validate the request...
//
//        $flight = new Model;
//
//        $flight->name = $request->name;
//
//        $flight->save();
//    }
}
