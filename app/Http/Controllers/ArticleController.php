<?php

namespace App\Http\Controllers;

use App\Angel;
use App\Star;
use App\Way;
use Illuminate\Http\Request;
use App\User;
use App\Test;
use App\Country;
use App\Article;
use App\Http\Requests;

class ArticleController extends Controller
{



//    protected static $articles;

//    public function  __construct()
//    {
//
//    }
//    public static function  addArticles ($array) {
//        return self::$articles [] = $array;
//    }


    public function index()
    {

//        $country = Country::find(1);
//
//        $test = Test::find(2);
//        $user = User::find(1);
//        $articles = Article::find(4);
/////////////////////////////////////
        $user = User::find(1);
        $angel = Angel::find(2);//ЧТО БЫ СДЕЛАТЬ ОДИН К МНОГИМ НУЖНО 2 МОДЕЛИ И ОДНА БУДЕТ ОБРАЩАТЬЯ КО ВТОРОЙ В КОТОРОЙ 
        // УЖЕ БУДЕТ МНОГО ОБРАЩЕНИЙ К ДРУГИМ ТАЛИЦАМ А В 1 ТАБ ДОСТАТОЧНО ОДНОГО ОБРАЩЕНИЯ К ТОЙ ТАЛБ ПРИМЕР ЕСТЬ
        // Article который обращается к User  и там уже ко всем остальным
        ///////////////////////
//        $articles = $user->test;
        $users = $user->angel; // ОБРАЩАЕМСЯ К АНГЕЛУ  ИЗ МОДЕЛИ USER И БЕРЕМ ВСЕ ЗНАЧЕНИЯ
        $angels = $angel->user;  // ОБРАЩАЕМСЯ К USER  ИЗ МОДЕЛИ ANGEL И БЕРЕМ ВСЕ ЗНАЧЕНИЯ  А ДАЛЬШЕ ЧЕРЕЗ foreach выводим
//          $tests =   $test->test;

        foreach ($users as $user) {
            echo $user->name. '<br>';
        }

        foreach ($angels as $angel) {
            echo $angels->name. '<br>';
        }
/////////////////////////////////////////
//        $stars = Star::with('user','angel')->get();
//        $star = Star::find(3);
        $way = Way::find(1);
//        $countrys = User::find(1);
//        $angels = $angels->country;  // ОБРАЩАЕМСЯ К USER  ИЗ МОДЕЛИ ANGEL И БЕРЕМ ВСЕ ЗНАЧЕНИЯ  А ДАЛЬШЕ ЧЕРЕЗ foreach выводим
//        $angels = $countrys-> angel;
//        $stars = $user->star; // работает  с foreach
//        $stars = $star->user;
//        $ways = $way->angel; // da
        $ways = $angel->way;
//        dump($way);
//        $countrys = $user->country;
//        $stars = $stars -> user;
//        foreach ($stars as $star) {
//            echo $star->name . '<br>';
//        }

//        $users = $stars->star; // ОБРАЩАЕМСЯ К АНГЕЛУ  ИЗ МОДЕЛИ USER И БЕРЕМ ВСЕ ЗНАЧЕНИЯ
        foreach ($ways as $way) {
            echo $ways->name . '<br>';
        }




    }







}
