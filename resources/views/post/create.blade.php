
{{--  @extends('app')--}}

        <h1>Create</h1>
        <h2>Create</h2>
        <h3>Create</h3>
        <h4>Create</h4>
        <h5>Create</h5>
        <h6>Create</h6>
        @section('content')

                <div class="form-group">
{{--                @include('post._form')--}}

                {{--{!! Form::label(['slug' ]) !!}--}}
                {{--{!! Form::label(['slug', null, ['class'=>'form-control'] ]) !!}--}}
                </div>
        @endsection
<!DOCTYPE HTML PUBLIC "-    //W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" href="style.css"  type="text/css">
    <title>Untitled Document</title>
</head>

<body>
<form action="/create" method="post" name="forma">
    <fieldset>
        <label for="first_name">Имя:</label><br/>
        <input type="text" name="first_name" size="30"><br/>
        <label for="last_name">Фамилия:</label><br/>
        <input type="text" name="last_name" size="30"><br/>
        <label for="email">Email:</label><br/>
        <input type="text" name="email" size="30"><br/>
        <label for="facebook">Facebook</label><br/>
        <input name="facebook" type="text" value="" size="30">
    </fieldset>
    <br/>
    <fieldset>
        <input id="submit" type="submit" value="Отправить данные"><br/>
    </fieldset>
</form>
</body>
</html>
<?php
//BD("localhost", "root", "");//параметры в скобках ("хост", "имя пользователя", "пароль")
//
//DB("Paradise");//параметр в скобках ("имя базы, с которой соединяемся")
 ?>
            <form method="post" action="create">
                <div class="form-group">
                    <label for="pwd">Таблица:</label>
                    <p><input  name="b"> <input type="submit"></p>
                </div>



            </form>
                </html>






                <!DOCTYPE html>
                <html>
<head>
    <meta charset="utf-8">
    <title>Формы</title>
</head>
<body>
<form action="handler.php">
    <p><input name="a"> <input type="submit"></p>
    <form action="handler.php">
        <p><input name="b"> <input type="submit"></p>
    </form>
</form>
</body>
</html>







<br>
{{--   ВЫВОДИТ ТАБЛИЦУ ДЛЯ ПОИСКА ЛЮДЕЙ  И ИХ ДОБАВЛЕНИЯ--}}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Вывод данных</title>
</head>

<body>
<fieldset>
    <form method="post" action="select_user.php">
        <label for="first_name">Имя для поиска:</label><br/>
        <input type="text" name="first_name" size="30"><br/>
        <label for="last_name">Фамилия для поиска:</label><br/>
        <input type="text" name="last_name" size="30"><br/>
        <input id="submit" type="submit" value="Найти и вывести"><br/>
    </form>
</fieldset>
<fieldset>
    <form method="post" action="all_users.php">
        <input id="submit" type="submit" value="Вывести всех пользователей"><br/>
    </form>
</fieldset>
<a href="info_form.html">Добавить пользователя</a>
</body>
</html>



{{--   ВЫВОДИТ ТАБЛИЦУ ДЛЯ ЗНАЧЕНИИЙ РАЗДЕЛЕННУЮ КОЛОНКАМИ И СТОЛБЦАМИ--}}
<br> <br>
<form method="post" action="">
    <table id="dynamic" width="650" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th scope="col">Поле 1</th>
            <th scope="col">Поле 2</th>
            <th scope="col">Поле 3</th>
            <th scope="col">Поле 4</th>
            <th scope="col">&nbsp;</th>
        </tr>
        <tr>
            <td>Значение 1</td>
            <td>Значение 2</td>
            <td>Значение 3</td>
            <td>Значение 4</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Значение 1</td>
            <td>Значение 2</td>
            <td>Значение 3</td>
            <td>Значение 4</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <input name="sub" type="submit" value="SEND">
</form>




{{--ВЫПАДАЮЩИЙ СПИСОК--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic table</title>
</head>
<body>

<form method="post" action="">
    <table width="650" border="1" cellspacing="0" cellpadding="5">
        <caption>
            <!-- Кол-во элементов option и их значения value можно задать произвольно //-->
            <select id="rows_setup">
                <option value="0">--Установить кол-во строк--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="10">10</option>
            </select>
        </caption>
        <!-- Заголовки //-->
        <thead>
        <tr>
            <th scope="col">Поле 1</th>
            <th scope="col">Поле 2</th>
            <th scope="col">Поле 3</th>
            <th scope="col">Поле 4</th>
        </tr>
        </thead>
        <!-- Сюда будем добавлять строки //-->
        <tbody id="dynamic"></tbody>
    </table>
    <input name="sub" type="submit" value="SEND">
</form>
<script>
    /* Навешиваем логику: */
    setupTable(
        "dynamic", /* ID элемента <tbody> таблицы */
        "rows_setup", /* ID элемента <select> для установки кол-ва строк */
        {1:"val1", 2:"val2", 3:"val3", 4:"val4"}, /* Конфигурация строки таблицы */

        function (row, fieldName) { /* Ф-ция должна возвращать HTMLElement тип - поле формы */
            var ELEMENT = document.createElement("INPUT");

            ELEMENT.name = fieldName + "[]";
            ELEMENT.type = 'number';
            ELEMENT.max = 100;
            ELEMENT.min = 0;

            return ELEMENT;
        }
    );
</script>
</body>
</html>



