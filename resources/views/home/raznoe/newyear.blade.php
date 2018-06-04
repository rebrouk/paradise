<?php





// ПОКАЗЫВАЕТ КОЛИЧЕСТВО РАЗ  СКОЛЬКО  ЧЕЛОВЕК ЗАШЕЛ НА САЙТ
echo "<br>";
if(empty($_COOKIE['user'])){
    $_COOKIE['user'] = 1;
    setcookie('user', $_COOKIE['user']);
    echo "Вы посетили наш сайт - ".$_COOKIE['user'];
} else {
    setcookie('user', $_COOKIE['user'] += 1);
    echo "Вы посетили наш сайт - ".$_COOKIE['user'];
}
echo "<br>";



// ВЫВОДИТ  Поздравляю Вас с праздником: ЕСЛИ ЕСЛИ ДЕНЬ СОВПАДАЕТ С НАСТОЯЩИМ ВРРЕМЕНЕМ
////////////////////////////////////////////////////
$holiday = ['26.04' => 'Св.Валентина', '8.03' => '8 Марта'];
$date = date('d.m', time());
foreach($holiday as $key=>$value){
    if($date == $key){
        echo "Поздравляю Вас с праздником:".$value;
    }};
////////////////////////////////////////////////////
//По заходу на страницу выведите сколько дней осталось до нового года.
$newYear = mktime(0,0,0,12,31);
echo floor(($newYear - time())/(60*60*24));echo "<br>";

?>


{{--//Дан инпут и кнопка. В этот инпут вводится год. По нажатию на кнопку выведите на экран, високосный он или нет.--}}
<form action="" method="get">
    <input type="text" name="year">
    <input type="submit" name="submit" id="" value="Какой год">
</form>
<?php
if(isset($_REQUEST['submit'])){
    $year = $_REQUEST['year'];
    $UserYear = date('L', mktime(0,0,0,1,1,$year));
    if($UserYear == 1){
        echo 'Высокосный год';
    } else {
        echo 'Не высокосный год';
    }
}echo "<br>";

?>
{{--//3. Дан инпут и кнопка. В этот инпут вводится дата в формате '01.12.1990'.--}}
{{--//По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, 'воскресенье'.--}}
<form action="" method="get">
<input type="text" name="date">
<input type="submit" name="submit" value="Какой день недели">
</form>
<?php
if(isset($_GET['date'])){
    $date = explode('.', $_GET['date']);
    $week = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
    echo $week[date('w', mktime(0,0,0,$date[1], $date[0],$date[2]))];
}

?>

<body>

<input type = "text" placeholder = "input date of birthday" onblur = "offFocus(this)" id = "date_birthday"/>

<p id = "quantity_day"><p>

</body>


{{--///////////////////////////////--}}
<?php
$birthday = '08.01.1996'; //день рождение
$arr = explode('.', $birthday);
$tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
if($tm<time()) $tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);
echo intval( ($tm-time())/86400 );


    $now = date('d.m.Y'); //сейчас
    $nowArr = explode('.', $now);

    $monthNow = date('t', mktime(0, 0, 0, $nowArr[1], $nowArr[0], $nowArr[2])); //текущий месяц
?>
{{--<input type="text" name="{{$monthNow}}" placeholder='$monthNow' required/><br>--}}
{{--<input type="text" name="{{$now}}" placeholder='$now' required/><br>--}}
  {{--<input type="submit" name="submit" value='Отправить'/><br>--}}
{{--<input type="submit" name="enter" value='Вывести'/><br>--}}

<?php
//    $birthday = '23.03.1994'; //день рождение
//    $arr = explode('.', $birthday);
//
//    $monthBirthday = date('t', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2])); //месяй день рождения
//    $rest = $monthBirthday - $arr[0]; //отсёк остальные дни, которые идут после моего дня рождения в этом месяце.
//
//    $days = 0;
//
//    for($i = $nowArr[1]; $i <= 12; $i++) {
//        $days = $days + date('t', mktime(0, 0, 0, $i, $nowArr[0], $nowArr[2])); // количество дней до конца года сначала месяца
//        if($i == $arr[1]) break;
//
//        if($i == 12) {
//            for($j = 1; $j <= $arr[1]; $j++) {
//                $days = $days + date('t', mktime(0, 0, 0, $j, $nowArr[0], $nowArr[2])); // количество дней до конца нужного месяца сначала месяца
//            }
//        }
//    }
//
//    echo $days - $nowArr[0] - $rest - 1;

//    ВЫВОД ТЕКУЩЕЙ ДАТЫ  ВКЛЮЧАЯ  И РЕГИОН
//$date = date('Y-m-d H:i:s');
//echo $date;
echo "<br>";
// Or:
$date = date('Y/m/d H:i:s');

// This would return the date in the following formats respectively:
$date = '2012-03-06 17:33:07';
// Or
$date = '2012/03/06 17:33:07';

/**
 * This time is based on the default server time zone.
 * If you want the date in a different time zone,
 * say if you come from Nairobi, Kenya like I do, you can set
 * the time zone to Nairobi as shown below.
 */

date_default_timezone_set('Africa/Nairobi');

// Then call the date functions
$date = date('Y-m-d H:i:s');
// Or
$date = date('Y/m/d H:i:s');

// date_default_timezone_set() function is however
// supported by PHP version 5.1.0 or above.
$currentYear = date('Y'); // получаем текущий год
echo $date;
echo "<br>";
//echo $currentYear;
echo "<br>";




////////////////////////////////////////////////////////
$newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1); // высчитываем дату Нового Года
$seconds = $newYear - time();

$days = 0; $hours = 0; $minutes = 0;
$oneMinute = 60;
$oneHour = 60 * $oneMinute;
$oneDay = $oneHour * 24;

if ($seconds / $oneDay > 0) {
    $days = (int)($seconds / $oneDay);
    $seconds -= $days * $oneDay;
}

if ($seconds / $oneHour > 0) {
    $hours = (int)($seconds / $oneHour);
    $seconds -= $hours * $oneHour;
}

if ($seconds / $oneMinute > 0) {
    $minutes = (int)($seconds / $oneMinute);
    $seconds -= $minutes * $oneMinute;
}

printf('До Новога Года осталось: %02d дней %02d часов %02d минут и %02d секунд', $days, $hours, $minutes, $seconds);
echo "<br>";




$currentYear = date('Y'); // получаем текущий год



?>





{{--//  ФОРМА РЕГИСТРАЦИИ  ДЛЯ АККАУНТА--}}
{{--<form method="post" action="tasks.blade.php">--}}
    {{--<input type="text" name="username" placeholder='Username' required/><br>--}}
    {{--<input type="text" name="login" placeholder='Login' required/><br>--}}
    {{--<input type="password" name="password" placeholder='Password' required/><br>--}}
    {{--<input type="password" name="r_password" placeholder='Repeat Password' required/><br>--}}
    {{--<input type="submit" name="submit" value='Отправить'/><br>--}}
    {{--<input type="submit" name="enter" value='Вывести'/><br>--}}

{{--</form>--}}

{{--    ВЫВОДИТ НА ЭКРАН ФОРМУ ТОГО ЧТО ОТПРАВИЛОСЬ--}}
<?php
?>
{{--print_r($_REQUEST);--}}
{{--if(!empty($_REQUEST)){--}}
{{--if($_REQUEST['text'] == '1') echo "username";--}}
{{--if($_REQUEST['test'] == '2') echo '0 - 25';--}}
{{--//if($_REQUEST['test'] == '3') echo '26 - 30';--}}
{{--//if($_REQUEST['test'] == '4') echo '30 и более';--}}
{{--}--}}
{{--?>--}}
{{--<form action="" method="get">--}}
    {{--<p>How old are you?</p>--}}

    {{--<input type="text" name="username" placeholder='Username' ><br>--}}
    {{--<input type="text" name="login" placeholder='Login' /><br>--}}
    {{--<input type="text" name="login" placeholder='Login' /><br>--}}
    {{--<input type="radio" name="test" value="1" checked>Менее 20 <br>--}}
    {{--<input type="radio" name="test" value="2">0 - 25 <br>--}}
    {{--<input type="radio" name="test" value="3">26 - 30 <br>--}}
    {{--<input type="radio" name="test" value="4">30 и более<br>--}}
    {{--<input type="submit" name="submit" value="Отправить">--}}
{{--</form>--}}



