


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Селекторы атрибутов</title>
    <style>
        A[target="_blank"] {
            /*background: url(images/blank.png) 0 6px no-repeat; !* Параметры фонового рисунка *!*/
            padding-left: 15px; /* Смещаем текст вправо */
        }
    </style>
</head>

<body>
<p><a href="/">Главная</a> |
    <a href="/post/create" target="_blank">Ссылка в новом окне na Create</a></p>

{{-- СКРИПТ ДЛЯ КОНСОЛИ ТО ЕСТЬ ЧАТА --}}
<div>
    <button onclick="send();">Кнопка для чата</button>
</div>
<script>
    var coon = new WebSocket('ws://localhost:8080');
    coon.onopen = function (e) {
        console.log('Полученные данные: ' + e.data);
    };

    function send() {
        var data = 'Данные отправлены: ' + Math.random();
        coon.send(data);
        console.log('Отправленно: ' + data);
    }

</script>
{{----}}
</body>
</html>


{{--@extends ('app')--}}
    {{--@section('content')--}}
@foreach($users   as $user)
    <article>
        <h2>{!! $user->title !!} </h2>
        <p>
            {!!$user->excerpt !!}
        </p>
        <p>
            published: {{$user->published_at}}
        </p>
        <p>
            Date: {!! $user->created_at !!}
        </p>
        <p>
            Content: {!! $user->content !!}
        </p>
    </article>
@endforeach
{{--@stop--}}



