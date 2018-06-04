<?php

namespace App\Http\Controllers;
use App\HomeDec;
use App\Home;
use App\Description;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {

        echo view('class.index');

    }

    /////////////////////////////11111111111111
    //  ВЫЗЫВАЕТСЯ С ПОМОЩЬЮ ОБЬЕКТА $class
    function Variable()
    {
//        echo 123;
        //  ИЗ ЭТОЙ ФУНКЦИИ  ВЫЗЫВАЕТСЯ ФУНКЦИЯ  Bar()
        $name = 'Bar';
        // МЫ ЕЕ ИНИЦИАЛИРИЗУЕМ  И НИЖЕ ОБРАЩАЕМСЯ К НЕЙ
        $this->$name(); // Вызываем метод Bar()
    }

    function Bar()
    {
        echo "ВЫЗЫВАЕТСЯ ИЗ ФУНКЦИИ Variable()";
    }
/////////////////////////////////////////111111111111111111



/////////////////////////////////////////222222222222222

    static $variable = ' статическое свойствоooo ';
    static function Variable111()
    {
        echo ' Вызов метода Variable111 ';
    }
    ///////////////////////////////////22222222222222222


    ///////////////////////////////////333333333333333333
    function __construct() {
        print "Конструктор класса ClassController\n";
    }



    ///////////////////////////////////333333333333333333


}

$obj = new ClassController();




//               ТАКОЙ ЖЕ СПОСОБ ВЫЗОВА ИЗ ФАЙЛА НУЖНО ТОЛЬКО ДОПИСАТЬ USE И ПУТЬ К КОНТРОЛЛЕРУ
//////////////////////////1111111111111111
//  ВЫЗЫВАЕТСЯ ФУНКЦИЯ  Variable
$class = new ClassController();
 $funcname = "Variable";
 $class->$funcname();  // Обращаемся к $foo->Variable()
/////////////////////////////////11111111111111111

///////////////////////////////22222222
echo ClassController::$variable; // Это выведет 'статическое свойство'. Переменная $variable будет разрешена в нужной области видимости.
$variable = "Variable111";
ClassController::$variable();  // Это вызовет $foo->Variable(), прочитав $variable из этой области видимости.
/////////////////////////////222222222222