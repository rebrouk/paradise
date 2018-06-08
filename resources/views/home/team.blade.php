<!DOCTYPE html>
<html>
<tbody>
<tr>
    <th scope="col" bgcolor="#006c00" width="289">
        <div align="center"><h1>Типо страйкбол</h1></div>
    </th>
</tr>
</tbody>
<head>
    <title>Типо Страйкбол</title>
    <tr>
        @if(!\Auth::check())
            <h2>
                <div align="right"><a href="/login"> Войти </a>
                    <le></le>
                    <le></le>

                    <a href="/register"> Регистрация </a></div>
            </h2>
        @else
            <h2>
                <div align="right">
                    <a href="/logout">Logout</a>
                </div>
            </h2>
        @endif
    </tr>
    <!-- TemplateEndEditable -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    {{--// цвет сайта--}}
    {{--<style type="text/css">--}}
    {{--<!----}}
    {{--body, td, th {--}}
    {{--font-family: Arial, Helvetica, sans-serif;--}}
    {{--font-size: 12px;--}}
    {{--color: #000000;--}}
    {{--}--}}

    {{--body {--}}
    {{--background-color: #c2c2c2;--}}
    {{--}--}}

    {{--a {--}}
    {{--font-family: Arial, Helvetica, sans-serif;--}}
    {{--font-size: 12px;--}}
    {{--color: #009900;--}}
    {{--}--}}

    {{--a:link {--}}
    {{--text-decoration: none;--}}
    {{--}--}}

    {{--a:visited {--}}
    {{--text-decoration: none;--}}
    {{--color: #009900;--}}
    {{--}--}}

    {{--a:hover {--}}
    {{--text-decoration: none;--}}
    {{--color: #00CC00;--}}
    {{--}--}}

    {{--a:active {--}}
    {{--text-decoration: none;--}}
    {{--color: #00CC00;--}}
    {{--}--}}


    {{--</style>--}}
    <td><a href="http://paradise/">Перейти на главную</a></td>

</head>

<body class="sub">
<div align="center">
    <table border="0" cellpadding="0" cellspacing="4" width="200">
        <tbody>
        <tr>

        </tbody>
    </table>
    <div align="left">
    <table border="0" cellpadding="0" cellspacing="0" width="600">
        <tbody>

        </tbody>
    </table>
    <table style="text-align: center;" border="0" cellpadding="120" cellspacing="0" width="600">
        <tbody>
        <tr>
            <td style="vertical-align: top;" width="150">


                <table border="0" cellpadding="0" cellspacing="0" width="150">
                    <tbody>
                    <tr>
                        <th scope="col" background="images/Left_Nav.jpg"><h4>Навигация блять</h4></th>
                    </tr>
                    </tbody>
                    {!! $descrip->id !!} <h2>команда</h2>

                </table>

                <table border="0" cellpadding="0" cellspacing="0" width="150">
                    <tbody>


                    <div id="map" style="width: 600px; height: 450px"></div>

                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
                    <script type="text/javascript">
                        var myMap;
                        ymaps.ready(init); // Ожидание загрузки API с сервера Яндекса
                        function init() {
                            myMap = new ymaps.Map("map", {
                                center: [55.76, 37.64], // Координаты центра карты
                                zoom: 10 // Zoom
                            });
                        }

                    </script>
                    <title>Примеры. Отображение собственных тайлов на карте.</title>
                    <meta charset="utf-8">

                    <style>
                        html, body, .map {
                            width: 100%;
                            height: 100%;
                            margin: 0;
                            padding: 0;
                        }
                    </style>

                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
                    <script src="custom_map.js"></script>
                    <body>
                    <div id="map" class="map"></div>
                    </body>

                    <meta charset="utf-8">
                    <title>Рамка вокруг текста</title>
                    <style>
                        .outline {
                            border: 1px solid red;
                            padding: 0 10px;
                        }
                    </style>
                    <body>
                    <td style="vertical-align: top;" width="3000">
                        <!-- TemplateBeginEditable name="News" -->
                        <div align="center">
                            <table border="0" cellpadding="0" cellspacing="0" width="270">
                                <tbody>
                                <tr>
                                    <th scope="col" bgcolor="#006c00" width="289">
                                        <div align="left">Новости и другие обновления:</div>
                                    </th>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </body>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    <h2>Описание</h2>

    <?$reals = \Auth::user();  ?>
    <h2>Даты проведения игры</h2>
    <h3> {!! $descrip->id !!} команда, игра будет происходить {!! $descrip->updated_at !!}</h3><br>



    {{--// ВСТАВЛЯЕТ НУЖНЫЙ ТЕКСТ ДЛЯ НУЖНОЙ КОМАНДА--}}
    <h3> {!! $descrip->id !!} {{"команда, описание"}} </h3>
    <h3>{!! $descrip->text !!}</h3><br>

    {{--        @if(!(\Auth::check(\Auth::user() )))  {{--//проверка если не  зашел ли юзер--}}

    @if(!(\Auth::check()))  {{--//проверка зашел ли юзер--}}
    зайдите в аккаунт что бы зайти в команду  <br>


    @elseif(\Auth::check( ))

        вы зашли в аккаунт и можете подписаться <br>
        {{--            @section('content')--}}
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                     <div class="panel-body">
                        <!-- Display Validation Errors -->
                    @include('common.errors')
                    <!-- New Task Form -->
                        <form action="{{ url('team/show/' . $descrip->id )}}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">

                                {{--// ДЛЯ ПОДПИСКИ ЮЗЕРА НА ГРУППУ--}}
                                <?php  $a = \Auth::user()->id ?>
                            </div>

                            {{--@if ( isset(\Auth::user()->id))--}}
                            @if (!isset(\Auth::check()-> $descrip->id ))

                                {{--// добавляет с таблицу team_user ид юзера и номер команды на которую он подписывается--}}
                                вы можете подписаться
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
                            @endif

                            {{--// удаляет с таблицы team_user ид юзера и номер команды на которую он подписался--}}
                            {{--                            @if ($errors->has(\Auth::id($a )))--}}
{{--                            @if ( (count(\Auth::user()) != 0)))--}}
{{--                            @if (!isset(\Auth::check()-> $descrip->id ))--}}
                            @if (\Auth::check())
                            <span class="help-block">
{{--                                        <strong>{{ $errors->first(\Auth::id($a )) }}</strong>--}}

                                вы уже в команде
                                        <div class="page_actions_wide clear_fix">
                                            <div class="page_action_left fl_l">
                                                <div id="page_actions_btn"
                                                     class="flat_button button_wide secondary page_actions_btn"
                                                     onmouseover="Page.actionsPreloadFeedLists(this)"
                                                     onclick="Page.actionsDropdown(ge('page_actions_wrap'), Page.actionsPreloadFeedLists.pbind(this, 1));"
                                                     tabindex="0" role="button"><span class="page_actions_dd_label">Вы подписаны</span></div>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" role="form" method="POST"

                                              action="/team/show/{!! $descrip->id !!}">
                                            <br><br>
                                            <button id="public_subscribe" class="flat_button button_wide"
                                                    onclick="{!! \Auth::user()  !!}">Отписаться111</button>


                                    @endif


                            {{--// показывает   таблицу team_user и кто в ней есть   --}}
                            @if (count($teamusers) > 0)
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-striped task-table">
                                            <thead>
                                            <th> id   пока просто</th>
                                             <th>teams_id</th>
                                            <th>user_id</th>

                                            <th>&nbsp;</th>

                                            </thead>
                                            <tbody>
                                            {{--@foreach ($teamusers as $teamuser)--}}
                                                {{--<tr>--}}
                                                    {{--<td class="table-text">--}}
                                                        {{--<div>{{ $teamuser->id }}</div>--}}
                                                    {{--</td>--}}
                                                    {{--<td class="table-text">--}}
                                                        {{--<div>{{ $teamuser->teams_id }}</div>--}}
                                                    {{--</td>--}}
                                                    {{--<td class="table-text">--}}
                                                        {{--<div>{{ $teamuser->user_id }}</div>--}}
                                                    {{--</td>--}}
                                                     {{--<td>--}}
                                                    {{--<form action="{{ url('/team/show/' . $descrip->id  ) }}" method="POST">--}}
                                                        {{--{{ csrf_field() }}--}}
                                                        {{--{{ method_field('DELETE') }}--}}

                                                        {{--<input type="hidden" name="teams_id" value="{{ $teamuser->teams_id }}">--}}

                                                        {{--<button --}}{{--id="user_id" name="user_id"--}}
                                                                {{--value="{{ $a }}"--}}{{-- type="submit" class="btn btn-danger">--}}
                                                            {{--<i class="fa fa-btn fa-trash"></i>Отпись--}}
                                                        {{--</button>--}}
                                                    {{--</form>--}}
                                                {{--</td>--}}
                                                {{--</tr>--}}
                                            {{--@endforeach--}}
                                            @foreach ($teamusers as $teamuser)
                                                <tr>

                                                <td class="table-text"><div>{{ $teamuser->id }}</div></td>
                                                <td class="table-text"><div>{{ $teamuser->teams_id }}</div></td>
                                                <td class="table-text"><div>{{ $teamuser->user_id }}</div></td>

                                                <td>
                                                    <form action="{{ url('team/show/' . $descrip->id ) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <input type="hidden" name="teams_id" value="{{ $teamuser->teams_id }}">

                                                        <button {{--id="user_id" name="user_id"
                                                                value="{{ $a }}"--}} type="submit" class="btn btn-danger">
                                                            <i class="fa fa-btn fa-trash"></i>Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
<!-- --><?php //use App\TeamUser;
//        if(isset(\TeamUser::where('user_id', '=', 14)->where('teams_id', '=', \Request::input('teams_id')))):

//        endif
    ?>
                {!! \Auth::id()!!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
                {!! \Auth::user()->name !!}<br> {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
                <br><br>
                @endif
                @endif
                {{--@endsection--}}

                {{--// показывает участников команды то есть кто участвует--}}
                <aside>
                    <div class="page_block">
                        <aside aria-label="Участники">
                            <div class="module clear people_module _module" id="group_followers">
                                <div class="header_right_link fl_r">
                                </div>
                            </div>
                        </aside>
                        <a href="/team/show/{!! $descrip->id !!}"
                           onclick="return page.showPageMembers(event, -89805342, 'members')" class="module_header">
                            <div class="header_top clear_fix">
                                <span class="header_label fl_l"><h2>Участники</h2></span>


                            </div>
                        </a>

                    </div>
                </aside>

    {{--// вывод картинки--}}
    {{--<head>--}}
        {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
        {{--<meta http-equiv="imagetoolbar" content="no" />--}}
        {{--<title>Запрет отображения панели инструментов для всех изображений</title>--}}
    {{--</head>--}}
    {{--<body>--}}
    {{--<p><img src="/public/images/4.jpg" width="206" height="116" alt="Добро пожаловать" /></p>--}}
    {{--</body>--}}


   {{--// смена заднего плана на картинку--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<title>Фон</title>--}}
        {{--<style>--}}
            {{--body {--}}
                {{--background: #c7c3c5 url(/public/images/4.jpg); /* Цвет фона и путь к файлу */--}}
                {{--color: #fff9f9; /* Цвет текста */--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
    {{--<p></p>--}}
    {{--</body>--}}

                        {{--// ВЫВОД ИЗЕРОВ КОТОРЫЕ ПОДПИСАНЫ НА ЭТУ КОМАНДУ--}}
                        @foreach ($commands as $command)
                            {!!  $command->name . "<br>" !!}
                            <td class="table-text">
                                <div>{!!  $command->name  . "<br>" !!}</div>
        <td class="table-text"><div><a href="http://paradise/account/{{ $command->user->id }}">{{ $command->user->name }}</a></div></td>
        </td>
    @endforeach

                            <head>
                                <meta charset="utf-8">
                                <title>Рамка вокруг текста</title>
                                <style>
                                    .outline {
                                        border: 1px solid red;
                                        padding: 0 10px;
                                    }
                                </style>
                            </head>
                            <body>
                            <div class="outline">
                            </div>
                            </body>

                        </div>
