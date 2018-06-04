

@extends('email.app')

@section('content')
    <br>    <br>    <br>    <br>    <br>    <br>   <br>    <br>
    <td><h4><a href="http://paradise/">Перейти на главную</a></h4></td>
    <div class="panel-body">


        {{--//     ВАЛИДАЦИЯ ТО ЕСТЬ ПРОВЕРЯЕТ ПУСТЫЕ ЛИ СТРОКИ И НЕ ДОБАВЛЯЕТ ЗАПРОС ЕСЛИ ЧЕГО НЕ ХВАТЕТ--}}
        <!-- Display Validation Errors -->
        @include('common.errors')



    {{--<div class="container">--}}
        <div class="col-sm-offset-200 col-sm-800">
            <div class="panel panel-default">
                <div class="panel-heading">
            <h2> <p align="center" >Напишите нам и мы вам ответим </p></h2>
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
{{--                @include('common.errors')--}}

                <!-- New Task Form -->
                    <form action="{{ url('email')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                        <div class="form-group{{ $email->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Имя</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($email->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $email->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $email->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Ваш E-Mail адрес</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($email->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $email->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $email->has('text') ? ' has-error' : ''  }}">
                            <label for="email" class="col-md-4 control-label">Сообщение</label>
                            @if ($email->has('text'))
                                <span class="help-block">
                                        <strong>{{ $email->first('text') }}</strong>
                                    </span>
                            @endif
                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="text" value="{{ old('text') }}">



                        <br><div class="form-group">
                            <div class="col-md-6 col-md-offset-40">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Отправить
                                </button>
                                <br><br><br>

<form>


                        {{--   ЭТОТ ИФ ДЛЯ ТОГО ЧТО БЫ ПОКА В ТАБЛИЦЕ $tasks   ЕСТЬ ОДИН ПОСТ ОН БУДЕТ ЕО ВЫВОДИТЬ НА ЭКРАН   хотя ВСЕ РАБОТАЕТ И БЕЗ НЕГО ЭТО ЧИСТО ДЛЯ ПРОВЕРКИ--}}
                        @if (count($email) > 0)


                    @endif
                </div>
            </div>
        </div>
    </div>




@endsection


{{--<form method="post" action="/email/index.blade.php">--}}
    {{--<table width="50%" border="1" align="center">--}}
        {{--<tr>--}}
            {{--<td width="30%" align="left">Фамилия </td>--}}
            {{--<td width="70%" align="left"><input type="text" name="surname"></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td width="30%" align="left">Имя</td>--}}
            {{--<td width="70%" align="left"><input type="text" name="name"></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td width="30%" align="left">Отчество</td>--}}
            {{--<td width="70%" align="left"><input type="text" name="lastname"></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td width="30%" align="left">E-mail</td>--}}
            {{--<td width="70%" align="left"><input type="text" name="email"></td>--}}
        {{--</tr>--}}
        {{--<tr align="center">--}}
            {{--<td colspan="200"><br>--}}
                {{--<input type="submit" value="сохранить"><br><br>--}}
                {{--<a href="/test/all_persons.php" title="список сотрудников" target="_blank">--}}
                    {{--<button class="button">--}}
                        {{--список сотрудников--}}
                    {{--</button>--}}
                {{--</a>--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--</table>--}}
{{--</form--}}








