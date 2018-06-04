<?php




?>
<form action="">
<input type="date" name="happy" id="">
<input type="submit" name="submit" id="">
</form>

<?php
if(!empty($_GET['happy'])){
    $datehappy = $_GET['happy'];
    setcookie('dr', $datehappy, mktime(24,60,60,12,31));

} else {
    $date = explode('-', $_COOKIE['dr']);
    $User = floor((mktime(0, 0, 0, $date[1], $date[2]) - time())/(3600 * 24));
    if ($User == 0) {
        echo "У вас сегодня день рождения";
    }
    if ($User > 0) {
        echo "До дня рождения осталось " . $User;
    }
    if ($User < 0) {
        echo "Ваш день рождения в этом году уже прошел " . abs($User) . " дней назад";
    }
}
?>



{{--Создайте класс-оболочку Db над базами данных. Класс должен иметь следующие методы: получение данных, удаление данных, редактирование данных, подсчет данных, очистка таблицы, очистка таблиц.--}}

{{--<?php--}}
{{--class Db--}}
{{--{--}}
    {{--private $host = 'localhost';--}}
    {{--private $user = 'root';--}}
    {{--private $password = '';--}}
    {{--private $db = 'registation';--}}


    {{--public function __construct($host, $user, $password, $db)--}}
    {{--{ //метод подключения к базе данных --}}
        {{--$this->host = $host;--}}
        {{--$this->user = $host;--}}
        {{--$this->password = $password;--}}
        {{--$this->db = $db;--}}
        {{--$link = mysqli_connect($host, $user, $password, $db) or (mysqli_error($link));--}}
    {{--}--}}


    {{--public function getData($query)--}}
    {{--{--}}
        {{--$result = mysqli_query($link, $query) or die(mysqli_error($link));--}}
        {{--for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;--}}
        {{--return $data;--}}
    {{--}--}}

    {{--public function updateData($query)--}}
    {{--{--}}
        {{--$result = mysqli_query($link, $query) or die(mysqli_error($link));--}}
        {{--$data = mysqli_fetch_assoc($result);--}}
        {{--return $data;--}}
    {{--}--}}

    {{--public function countData($query)--}}
    {{--{--}}
        {{--$result = mysqli_query($link, $query) or die(mysqli_error($link));--}}
        {{--$count = mysqli_fetch_row($result);--}}
        {{--return $count;--}}
    {{--}--}}

    {{--public function deleteData($query)--}}
    {{--{--}}
        {{--$result = mysqli_query($link, $query) or die(mysqli_error($link));--}}
        {{--$data = mysqli_fetch_assoc($result);--}}
        {{--return $data;--}}
    {{--}--}}

{{--}--}}


<?php

////////////////////////
//        $a = array(1, 2, 3, 17);
//
//        $i = 52; /* только для пояснения */
//
//        foreach ($a as $v) {
//            echo "\$a[$i] => $v.\n";
//            $i++;
//        }
////////////////////////
//        $arr = array("one", "two", "three");
//        reset($arr);
//        while (list($key, $value) = each($arr)) {
//            echo "Ключ1: $key; Значение1: $value<br />\n";
//        }
//
//        foreach ($arr as $key => $value) {
//            echo "Ключ: $key; Значение: $value<br />\n";
//        }


///////////////////////
$arr = array("one", "two", "three");
reset($arr);
while (list(, $value) = each($arr)) {
echo "Значение: $value<br />\n";
}

foreach ($arr as $value) {
echo "Значение: $value<br />\n";
}
///////////////////////////

//                print date("H:i:s", mktime(0, 0, difftime()));
//                $diffdate =date("H:i:s", mktime(0, 0, difftime()));


//                echo view('home.index')
//                    ->with([
//                    'diffdate' => $diffdate
//        ]);
// перенаправляет на страницу логина для регистрации работает вместе с конструктором this->middleware('auth');
//        echo  view('home');
