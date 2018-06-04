<?php

use App\Http\Controllers\ClassController;

$class = new ClassController();
$funcname = "Variable";
$class->$funcname();  // Обращаемся к $foo->Variable()
/////////////////////////////////11111111111111111

///////////////////////////////22222222
echo ClassController::$variable; // Это выведет 'статическое свойство'. Переменная $variable будет разрешена в нужной области видимости.
$variable = "Variable111";
ClassController::$variable();  // Это вызовет $foo->Variable(), прочитав $variable из этой области видимости.
/////////////////////////////222222222222