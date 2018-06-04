


<form method="post" action="create">
                <div class="form-group">
                    <label for="create">Таблица create:</label>
                    <table>"create"</table>
                    <p><input name="slug">
                        <input type="submit"></p>
                </div>
</form>
{{--<form method="post" action="slug">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="create">Таблица slug:</label>--}}
                    {{--<table>"slug"</table>--}}
                    {{--<p><input  name="slug">--}}
                        {{--<input type="submit"></p>--}}
                {{--</div>--}}
{{--</form>--}}
{{--<form method="post" action="title">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="create">Таблица title:</label>--}}
                    {{--<table>"create"</table>--}}
                    {{--<p><input  name="slug">--}}
                        {{--<input type="submit"></p>--}}
                {{--</div>--}}
{{--</form>--}}
{{--<form method="post" action="content">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="create">Таблица content:</label>--}}
                    {{--<table>"content"</table>--}}
                    {{--<p><input  name="slug">--}}
                        {{--<input type="submit"></p>--}}
                {{--</div>--}}
{{--</form>--}}
{{--<form method="post" action="publiched">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="create">Таблица publiched:</label>--}}
                    {{--<table>"publiched"</table>--}}
                    {{--<p><input  name="slug">--}}
                        {{--<input type="submit"></p>--}}
                {{--</div>--}}
{{--</form>--}}
{{--<form method="post" action="publiched_at">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="create">Таблица publiched_at:</label>--}}
                    {{--<table>"publiched_at"</table>--}}
                    {{--<p><input  name="slug">--}}
                        {{--<input type="submit"></p>--}}
                {{--</div>--}}

{{--</form>--}}

<form method=["post","get"] action="create">
    <div class="form-group">
        <label for="pwd">Таблица:</label><br>
        <p><input  name="/"> <input type="submit"></p>
    </div>
</form>
<br> <a href="/">перейти на главную</a>

{{--<div class="form-group">--}}
    {{--{!! Form::label(['slug' ]) !!}--}}
    {{--{!! Form::label(['slug', null, ['class'=>'form-control'] ]) !!}--}}

{{--</div>--}}

<?php
//    $first_name = $_REQUEST['id'];
//    $last_name = $_REQUEST['title'];
//    $email = $_REQUEST['slug'];
//    $facebook = $_REQUEST['exerpt'];
?>


{{--// вырезал ИЗ INDEX.BLADE--}}

    {{--@extends('app')--}}
    {{--ДЛя вывода постов на страницу--}}
    {{--@section('content')--}}
    <div>
        {{--{ !! link_to_route( 'post', 'published')!!};--}}
        {{--{{!! link('post.create', 'new')}}--}}
    </div>
    {{--<?php--}}
    {{--$target = 'post.create'; // Это уже существующий файл--}}
    {{--$link = 'new'; // Это файл, который вы хотите привязать к первому--}}

    {{--link( $target, $link);?>--}}
    {{--<?php--}}
    {{--$target = 'post.published'; // Это уже существующий файл--}}
    {{--$link = 'published'; // Это файл, который вы хотите привязать к первому--}}

    {{--link( $target, $link);--}}
    {{--?>--}}
























<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Адрес почты</title>
    </head>
        <body>
        <p><a href="mailto:vlad@htmlbook.ru">Задавайте вопросы по электронной почте</a></p>
        </body>
</html>