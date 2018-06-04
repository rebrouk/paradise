<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 11.04.2018
 * Time: 16:33
 */

namespace App\Http\Controllers;


class IndexController
{
    public function index (){

//            $user->posts()->where('active', 1)->get();

//            $phone = User::find(1)->phone;
//
//            $comments = Post::find(1)->comments()->where('title', 'foo')->first();
//
//            $comment = Comment::find(1);

//            echo $comment->post->title;

//        echo $id;


        $foo = 'Боб';              // Присваивает $foo значение 'Боб'
        $bar = &$foo;              // Ссылка на $foo через $bar.
        $bar = "Меня зовут $bar";  // Изменение $bar...
        echo $bar;
        echo $foo;




        ////////////////////////////
        $a_bool = TRUE;   // логический
        $a_str  = "foo";  // строковый
        $a_str2 = 'foo';  // строковый
        $an_int = 12;     // целочисленный

        // Если это целое, увеличить на четыре
        if (is_int($an_int)) {
            $an_int += 4;
        }

// Если $a_bool - это строка, вывести ее
// (ничего не выводит)
        if (is_string($a_bool)) {
            echo "Строка: $a_bool";
        }

////////////////////////////



        $string='sfds';
        $binary = (binary) $string;
        echo  $binary."<br>";
        $binary = b"binary string";
        echo  $binary."<br>";

///////////////////////////

        $str = 'jnkdjkjebkbcjb '."<br>";
       echo  $str{1};

//////////////////////////

        $arr1 = array(2, 3);
        $arr2 = $arr1;
        $arr2[] = 4; // $arr2 изменился,
                     // $arr1 все еще array(2, 3)

        $arr3 = &$arr1;
        $arr3[] = 4; // теперь $arr1 и $arr3 одинаковы
        print_r($arr1);
        print_r($arr2);
        print_r($arr3);
        echo "<br>";


////////////////////////////////



        $juices["apple"]["green"] = "good";
        print_r($juices);
        echo "<br>";


//////////////////////////////////
        $colors = array('red', 'blue', 'green', 'yellow');

        foreach ($colors as $color) {
            echo "Вам нравится $color?\n";
        }
        foreach ($colors as &$color) {
            $color = strtoupper($color);
        }
        unset($color); /* это нужно для того, чтобы последующие записи в
$color не меняли последний элемент массива */

        print_r($colors);
        echo "<br>";

////////////////////////////////


        error_reporting(E_ALL);
        ini_set('display_errors', true);
        ini_set('html_errors', false);
// Простой массив:
        $array = array(1, 2);
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            echo "\nПроверяем $i: \n";
//            echo "Плохо: " . $array['$i'] . "\n";
            echo "Хорошо: " . $array[$i] . "\n";
//            echo "Плохо: {$array['$i']}\n";
            echo "Хорошо: {$array[$i]}\n";
        }


///////////////////////////////
        // Создаем простой массив.
        $array = array(1, 2, 3, 4, 5);
        print_r($array);

// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
        foreach ($array as $i => $value) {
            unset($array[$i]);
        }
        print_r($array);
//
//// Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
        $array[] = 6;
        print_r($array);
//
//// Переиндексация:
        $array = array_values($array);
        $array[] = 7;
        print_r($array);
//        echo '111111';


        ////////////////////////
    }
    public function create ($id){

//            $user->posts()->where('active', 1)->get();

//            $phone = User::find(1)->phone;
//
//            $comments = Post::find(1)->comments()->where('title', 'foo')->first();
//
//            $comment = Comment::find(1);

//            echo $comment->post->title;

//        echo $id;
        echo '111111';
    }
}

$obj = (object) 'ciao';
echo $obj->scalar."<br>";  // выведет 'ciao'