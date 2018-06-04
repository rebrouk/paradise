













{{--Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так,
 чтобы вместо этих чисел стояли их кубы.--}}

<?php
echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3d5f3'.'<br>');
function cube($matches)
{
    $result = pow($matches[0], 3); //$matches[0] - это найденное число
    return $result;
}
?>
{{--Результат выполнения кода:--}}
{{--a1b8c27--}}



<?php
echo preg_replace('#2\+3#', '!', '2+3 223 2223 2 3 +3 +2 2+3 23'.'<br>');
?>


<?php
echo preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea'.'<br>');
?>


{{--//  ДЕЛАЕТ ПИРАМИДКУ  ИЗ ЧИСЕЛ--}}
<?php
for ($i = 1; $i <= 9; $i++) {
    $str = '';
    for ($j = 0; $j < $i; $j++) {
        $str .= $i;
    }
    echo $str.'<br>';
}
?>




{{--С помощью цикла for сформируйте строку '987654321' и запишите --}}
{{--ее в переменную $str. Скрыть решение.--}}

<?php
$str = '';
for ($i = 9; $i > 0; $i--) {
    $str .= $i;
}
echo $str;
?>


{{--// Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд.--}}
{{--Если есть - выведите 'да', а если нет - выведите 'нет'--}}

<?php
$arr = [1, 2, 3, 3, 4, 5, 5];
$flag = false;
foreach ($arr as $key=>$elem) {
    if ($key > 0 and $elem == $arr[$key - 1]) {
        $flag = true;
        break;
    }
}

if ($flag == true) {
    echo 'DAA';
} else {
    echo 'NEET';
}
?>




{{--//   Проверьте, что это число не делится ни на одно другое число кроме себя самого--}}
{{--и единицы. То есть в нашем случае нужно проверить, что число 31 не делится на все числа--}}
{{--от 2 до 30. Если число не делится - выведите 'нет', а если делится - выведите 'да'.--}}
<?php
$num = 31;
$flag = false;
for ($i = 2; $i < $num; $i++) {
if ($num % $i == 0) {
$flag = true;
break;
}
}

if ($flag == true) {
echo 'da';
} else {
echo 'net';
}
?>




{{--// ПРОВЕРКА ЕСТЬ ЧИСЛО 5 В МАССИВЕ АРР ЕСЛИ ЕСТЬ ТО ДА ЕСЛИ НЕТ ТО ПИШЕТ ЧТО НЕТ--}}
<?php
$arr = [1, 4, 6, 10, 11, 5, 8];
$flag = false;
foreach ($arr as $elem) {
if ($elem == 5) {
$flag = true;
break;
}
}

if ($flag == true) {
echo 'da';
} else {
echo 'net';
}
?>





<form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    echo $name;
}
?>






<form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="age">
    <textarea name="message"></textarea>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_REQUEST['submit'])) {
    $age = strip_tags($_REQUEST['age']);
    $name = strip_tags($_REQUEST['name']);
    $message = strip_tags($_REQUEST['message']);
    echo "priveet, $name, $age <br> tvoe coobsheni: $message";
}
?>






<form action="" method="GET">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет,'.$name;
}
?>

<br>
<br>
<br>



<form action="" method="GET">
    <input type="text" name="city">
    <input type="submit">
</form>

<?php
//Если форма была отправлена и город не пустой:
if (isset($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo 'vash gorod: '.$city;
}
?>









