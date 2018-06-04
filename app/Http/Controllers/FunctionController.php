<?php

namespace App\Http\Controllers;
//header("Content-Type: text/html; charset=UTF-8");
use Illuminate\Http\Request;

use App\Http\Requests;

class FunctionController extends Controller
{
    public function index()
    {

        echo 'это вызов из роута который обращается к файлу ';
        echo "<br>";
        return view('function.index');
    }



    function Variable()
    {
        echo "<br>";
        echo  "это 3 функция которая обращается к 4 функции из функции";
        $name = 'Bar';
        $this->$name(); // Вызываем метод Bar()
        $obj3 = new FunctionController();
        $vuzov = "HomeControll";
        $obj3->$vuzov ();
    }

    function Bar()
    {
        echo "Это Bar"."<br>";
    }
//    echo  parent::FunctionController(Bar());  // Обращаемся к $foo->Variable()
//    echo Variable();  // Обращаемся к $foo->Variable()


// объявление свойства
    public function HomeControll()
    {

        echo "<br>";
        echo  "а это 4 функция которая обращается к файлу то есть к шаблону";
//        echo view('home');
        echo view('layouts.app');
    }
    public $var = 'значение по умолчанию';
////////////
    // объявление метода
    public function displayVar() {
        echo $this->var;
    }
///////
        public function Riddic () {
        echo 'eto riddic';
        }

/////////////////////////
    public $bar3 = 'свойство';

    public function barri() {
        return 'метод';
    }

///////////////////////
         public $rediska = 'redisochka';

    // обращаемся к классу Controller из этого контроллера из файла
    public function  extcontr (){

//        parent::extend();
        parent::Page();
    }

}

  global $rediska1  ;
    $rediska1  = 'redisochka1';
//$foo = new FunctionController();
//$funcname = "Variable";
//echo $foo->$funcname();  // Обращаемся к $foo->Variable()
//echo  parent::FunctionController(Bar());  // Обращаемся к $foo->Variable()

//$foo1 = new FunctionController();
//$funcname1 = "displayVar";
//echo $foo1->$funcname1();  // Обращаемся к $foo->Variable()





