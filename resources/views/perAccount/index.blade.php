<?php

//foreach ($users as $use){
//    echo 3234324;
//    echo $use;
//}




echo "<br>" . "<br>";
echo 'А ваше имя ' . '  ' . \Auth::user()->name . "<br>";
echo 'И Ваш ID ' . '  ' . \Auth::id() . "<br>";
?>



<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с изображениями в Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"><br>
    <style type="text/css">
        table, th, td {
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
//        use App\Image;
//if (Image::all('img')== NULL)
//{
//continue;
//}
?>





{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Работа с изображениями в Laravel</title>--}}
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    {{--<style type="text/css">--}}
        {{--table, th, td {--}}
            {{--border: 1px solid;--}}
            {{--padding: 5px;--}}
        {{--}--}}
    {{--</style>--}}
{{--<div class="container">--}}
    {{--<table>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>ID</th>--}}
            {{--<th>Название</th>--}}
            {{--<th>Картинка</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        @foreach($images as $image)
            <tr>
                {{--<td>{{ $image->id }}</td>--}}
                {{--<td>{{ $image->title }}</td>--}}
                {{--<td><img src="{{ asset('upload/'.$image->img) }}"></td><br>--}}
            </tr>
        @endforeach
    {{--</table>--}}
{{--</div>--}}
{{--<br>--}}



<p><img src="/public/images/{!! $image->img !!}" width="200" alt=" текст"></p>

<?php  $a = \Auth::user()->id ?>
    <form action="" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        {{--<div class="form-group">--}}
        {{--<input type="text" name="title" class="form-control" placeholder="Заголовок">--}}
        {{--</div>--}}
        <div class="form-group">
            <input type="file" name="img" accept="image/*">

            <input id="user_id" name="user_id"
                   value="{{ $a /*$descrip->id*/ }}" type="hidden" class="btn btn-default">
        </div>
        <button type="submit" class="btn btn-default btn-block">Опубликовать</button>
    </form>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        <input id="user_id" name="user_id"
               value="{{ $a }}" type="hidden" class="btn btn-default">


        <input id="teams_id" name="teams_id"
               value="{{ $descrip->id }}" type="hidden" class="btn btn-default">
        <i class="fa fa-btn fa-plus"></i>Подписаться
        <input type="submit">
    </div>
</div>

<a href="/">Home</a><br>
<a href="/email">email</a><br>
<a href="">Настройки</a><br>

{{--<div class="container">--}}
{{--<form action="{{ url('/account/{id}') }}" method="GET" enctype="multipart/form-data">--}}
{{--{{ csrf_field() }}--}}
{{--<div class="form-group">--}}
{{--<label for="title">Введите название</label>--}}
{{--<input class="form-control" id="title" placeholder="Название" name="title">--}}
{{--</div><br>--}}
{{--<div class="form-group">--}}
{{--<label for="img">Выберите файл</label>--}}
{{--<input id="img" type="file" multiple name="img">--}}
{{--</div><br>--}}
{{--<button value="{{ $teamuser->img }}" type="submit" class="btn btn-default">Добавить</button>--}}

{{--</form>--}}
{{--</div>--}}
{{--</body>--}}


{{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label">Name</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('name'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('name') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}