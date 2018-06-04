

{{--@extends('createTeam.app')--}}

{{--@section('content')--}}
    {{--<br>    <br>    <br>    <br>    <br>    <br>   <br>    <br>--}}
    {{--<td><h4><a href="http://paradise/">Перейти на главную</a></h4></td>--}}
    {{--<div class="panel-body">--}}


    {{--//     ВАЛИДАЦИЯ ТО ЕСТЬ ПРОВЕРЯЕТ ПУСТЫЕ ЛИ СТРОКИ И НЕ ДОБАВЛЯЕТ ЗАПРОС ЕСЛИ ЧЕГО НЕ ХВАТЕТ--}}
    {{--<!-- Display Validation Errors -->--}}
        {{--@include('common.errors')--}}



        {{--<div class="container">--}}
        {{--<div class="col-sm-offset-200 col-sm-800">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h2> <p align="center" >Напишите нам и мы вам ответим </p></h2>--}}
                {{--</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<!-- Display Validation Errors -->--}}
                {{--                @include('common.errors')--}}

                {{--<!-- New Task Form -->--}}
                    {{--<form action="{{ url('create')}}" method="POST" class="form-horizontal">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="form-group{{ $creates->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Имя</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">--}}

                                {{--@if ($creates->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $creates->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $email->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">Ваш E-Mail адрес</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">--}}

                                {{--@if ($email->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $email->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group{{ $creates->has('team') ? ' has-error' : ''  }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">Сообщение</label>--}}
                            {{--@if ($creates->has('team'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $creates->first('team') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="text" type="text" class="form-control" name="text" value="{{ old('team') }}">--}}


                        {{--<div class="form-group{{ $creates->has('game') ? ' has-error' : ''  }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">Сообщение</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="text" type="text" class="form-control" name="text" value="{{ old('game') }}">--}}



                        {{--<div class="form-group{{ $creates->has('text') ? ' has-error' : ''  }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">Сообщение</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="text" type="text" class="form-control" name="text" value="{{ old('text') }}">--}}



                                {{--<br><div class="form-group">--}}
                                    {{--<div class="col-md-6 col-md-offset-40">--}}
                                        {{--<button type="submit" class="btn btn-primary">--}}
                                            {{--<i class="fa fa-btn fa-user"></i>Отправить--}}
                                        {{--</button>--}}
                                        {{--<br><br><br>--}}

                                        {{--<form>--}}


                                        {{--   ЭТОТ ИФ ДЛЯ ТОГО ЧТО БЫ ПОКА В ТАБЛИЦЕ $tasks   ЕСТЬ ОДИН ПОСТ ОН БУДЕТ ЕО ВЫВОДИТЬ НА ЭКРАН   хотя ВСЕ РАБОТАЕТ И БЕЗ НЕГО ЭТО ЧИСТО ДЛЯ ПРОВЕРКИ--}}
                                        {{--@if (count($email) > 0)--}}


                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}




{{--@endsection--}}


                                {{--не учавствует--}}
                                @extends('createTeam.app')

                                @section('content')
                                    <br>    <br>    <br>
                                <td><h4><a href="http://paradise/">Перейти на главную</a></h4></td>
                                <div class="panel-body">


                                {{--//     ВАЛИДАЦИЯ ТО ЕСТЬ ПРОВЕРЯЕТ ПУСТЫЕ ЛИ СТРОКИ И НЕ ДОБАВЛЯЕТ ЗАПРОС ЕСЛИ ЧЕГО НЕ ХВАТЕТ--}}
                                <!-- Display Validation Errors -->
                                @include('common.errors')



                                {{--<div class="container">--}}
                                            <div class="col-sm-offset-222 col-sm-822">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        {{--New Task--}}
                                                    {{--</div>--}}

                                    <form action="{{ url('/create')}}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $creates->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Название</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                                @if ($creates->has('name'))
                                                    <span class="help-block">
                                        <strong>{{ $creates->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group{{ $creates->has('game') ? ' has-error' : ''  }}">
                                            <label for="game" class="col-md-4 control-label">Игра</label>
                                            @if ($creates->has('game'))
                                                <span class="help-block">
                                        <strong>{{ $creates->first('game') }}</strong>
                                    </span>
                                            @endif
                                            <div class="col-md-6">
                                                <input id="game" type="text" class="form-control" name="game" value="{{ old('game') }}">
                                            </div></div>




                                        <div class="form-group{{ $creates->has('team') ? ' has-error' : ''  }}">
                                            <label for="game" class="col-md-4 control-label">Команда</label>
                                            @if ($creates->has('team'))
                                                <span class="help-block">
                                        <strong>{{ $creates->first('team') }}</strong>
                                    </span>
                                            @endif
                                            <div class="col-md-6">
                                                <input id="team" type="text" class="form-control" name="team" value="{{ old('team') }}">
                                            </div></div>



                                        {{--// ДАТА ПРОВЕДЕНИЯ ИГР--}}
                                        <div class="form-group{{ $creates->has('game_date') ? ' has-error' : ''  }}">
                                            <label for="date" class="col-md-4 control-label">Дата проведения</label>
                                            @if ($creates->has('game_date'))
                                                <span class="help-block">
                                        <strong>{{ $creates->first('game_date') }}</strong>
                                    </span>
                                            @endif
                                            <div class="col-md-6">
                                                {{--<input type="text" name="date" value="ДД/ММ/ГГГГ" onClick="this.value=''{{ old('game_date') }}" />--}}

                                                <input id="game_data" type="date" class="form-control" name="game_data" value="{{ old('game_date') }}">
{{--                                                <input id="date" type="date" class="date" name="date" value="{{ old('game_date') }}">--}}

                                            </div></div>




                                        <div class="form-group{{ $creates->has('text') ? ' has-error' : ''  }}">
                                            <label for="email" class="col-md-4 control-label">Описание</label>
                                            @if ($creates->has('text'))
                                                <span class="help-block">
                                        <strong>{{ $creates->first('text') }}</strong>
                                    </span>
                                            @endif
                                            <div class="col-md-6">
                                                <input id="text" type="text" class="form-control" name="text" value="{{ old('text') }}"><br>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn fa-user"></i>Создать
                                                    <br>
                                                </button>
                                            </div></div>





                                                {{--<label for="localdate">Дата и время: </label>--}}
                                                {{--<input type="datetime-local" id="localdate" name="date"/>--}}

                                                <br><div class="form-group">
                                                    <div class="col-md-6 col-md-offset-40">

                                                        <br>

                                                        <form>
                                                            </div>


                                            <!-- Current Tasks -->
                                            @if (count($creates) > 0)
                                                <div class="panel panel-default">
                                                    {{--<div class="panel-heading">--}}
                                                        {{--Current Tasks--}}
                                                    {{--</div>--}}

                                                    <div class="panel-body">
                                                        <table class="table table-striped task-table">
                                                            <thead>
                                                            <th>Название</th>
                                                            <th>Создал</th>
                                                            <th>Команда</th>
                                                            <th>Дата проведения</th>
                                                            <th>Описание</th>

                                                            <th>&nbsp;</th>

                                                            </thead>
                                                            <tbody>
                                                            @foreach ($creates as $create)
                                                                <tr>
                                                                    <td class="table-text"><div><a href="http://paradise/team/show/{{ $create->id }}">{{ $create->name }}</a></div></td>
                                                                    <td class="table-text"><div>{{ $create->game }}</div></td>
                                                                    <td class="table-text"><div>{{ $create->team }}</div></td>
                                                                    <td class="date"><div>{{ $create->game_date }}</div></td>
                                                                    <td class="table-text"><div>{{ $create->text }}</div></td>

                                                                    {{--// ДЛЯ ПЕРЕХОДА НА СТРАНИЦУ СОЗДАННЫХ КОМАНД--}}
                                                                    {{--<a href="http://paradise/team/show/{{ $create->id }}">Перейти</a><br>--}}

                                                                    <!-- Task Delete Button -->
                                                                    {{--<td>--}}

                                                                        {{--<form action="{{ url('create/'.$create->id) }}" method="POST">--}}
                                                                            {{--{{ csrf_field() }}--}}
                                                                            {{--{{ method_field('DELETE') }}--}}

                                                                            {{--<button type="submit" class="btn btn-danger">--}}
                                                                                {{--<i class="fa fa-btn fa-trash"></i>Delete--}}
                                                                            {{--</button>--}}
                                                                        {{--</form>--}}
                                                                    {{--</td>--}}
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endif
                                                                </div> </div></div></div></div>
                                    </div>


                            @endsection















