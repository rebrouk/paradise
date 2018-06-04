<?php
use App\TeamUser;
use App\User;
use Illuminate\Support\Facades\Form;


//echo 'privet';
//$users = TeamUser::has('id')->get();
//foreach ($users as $user) {
//    echo $user;
//}
//foreach  ($users  as $user){
//            echo $user;
//        }

//$user  = TeamUser::find(1);
//$postsHasMany = $user->user();
//$posts = $postsHasMany->where('users_id','Описание-%')->get();
//foreach ($posts as $post) {
//echo $post;
//}


?>

@if(!(\Auth::check()))  {{--//проверка зашел ли юзер--}}

зайдите в аккаунт что бы подписааться    <br>
@elseif(\Auth::check())
    вы зашли в аккаунт и можете подписаться <br>

    {{--<form class="form-horizontal" role="form" method="POST" action="teamuser/show/{!! \Auth::user()->id!!} ">--}}
    <form class="form-horizontal" role="form" method="POST" action="teamuser/">
        <br><br><br><br>
        <button id="public_subscribe" class="flat_button button_wide" onclick="{!! \Auth::user()->id !!}">Подписаться
        </button>
    </form></form>
    {!! \Auth::user()->id !!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
    {!! \Auth::user()->name !!}<br> {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}




@elseif(\Auth::user())
    {!! \Auth::user()->id !!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
    {!! \Auth::user()->name !!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
@endif



{{--<form class="form-horizontal" role="form" method="POST" action="teamuser/show/{!! \Auth::user()->id!!} ">--}}
{{--<form class="form-horizontal" role="form" method="POST" action="teamuser/">--}}
{{--<br><br><br><br>--}}
{{--<button id="public_subscribe" class="flat_button button_wide" onclick="{!! \Auth::user()->id !!}">Подписаться</button>--}}
{{--</form>--}}
{{--@if(\Auth::user())--}}
{{--{!! \Auth::user()->id !!}--}}
{{--Вы подписаны--}}
{{--@elseif(!(\Auth::user()))--}}
{{--подпишись--}}
{{--@endif--}}
@foreach ($teamusers as $teamuser)
    <td>
        <a href="http://paradise/teamuser/show/{{ $teamuser->id }}">{{ $teamuser->title }}Перейти</a><br>
    </td>
    @endforeach

    </div>
    <div id="public_actions_wrap" class="group_actions_wrap">
        <aside aria-label="Действия">
            <div id="page_actions" class="page_actions" style="">
                <div class="group_send_msg">
                    <a href="http://paradise/"
                       onclick="return checkEvent(event) ? true : showWriteMessageBox(event,'paradise')">{{--//переход на нужную страницу--}}
                        <button class="flat_button button_wide _group_send_msg _groups_messages_btn_tt"
                                onclick="showWriteMessageBox(event, 'paradise')">Написать сообщение
                        </button>
                    </a>
                </div>
                <div class="page_actions_wide clear_fix">
                    <div class="page_action_left fl_l">
                        <div id="page_actions_btn" class="flat_button button_wide secondary page_actions_btn"
                             onmouseover="Page.actionsPreloadFeedLists(this)"
                             onclick="Page.actionsDropdown(ge('page_actions_wrap'), Page.actionsPreloadFeedLists.pbind(this, 1));"
                             tabindex="0" role="button"><span class="page_actions_dd_label">Вы подписаны</span></div>
                    </div>
                </div>
            </div>
        </aside>
    </div>






    <a href="http://paradise/teamuser" class="load">Добавить</a>
    <div class="team_users"></div>
    <a href="http://paradise/teamuser" class="remove">Удалить</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        // Добавляем новую запись, когда произошел клик по кнопке
        $("#FormSubmit").click(function (e) {
            e.preventDefault();

            $(function () {
                $(document).on('click', '.load', function (event) {
                    event.preventDefault();
                    $.post('/get-user', function (response) {
                        if (response.ok == 'true') {
                            $('.team_users').html(response.view);
                            alert("true");
                        }
                    });
                });

                $(document).on('click', '.remove', function (event) {
                    event.preventDefault();
                    $('.team_users').html('');
                    alert("sefsf");
                });
            });
        })
    </script>

    <script>
        $(document).ready(function () {
// Добавляем новую запись, когда произошел клик по кнопке
            $("#FormSubmit").click(function (e) {

                e.preventDefault();

                var myData = "content_txt=" + $("#contentText").val(); //post variables


//Удаляем запись при клике по крестику
                $("body").on("click", "#responds .del_button", function (e) {
                    e.preventDefault();
                    var clickedID = this.id.split("-"); //Разбиваем строку (Split работает аналогично PHP explode)
                    var DbNumberID = clickedID[1]; //и получаем номер из массива
                    var myData = 'recordToDelete=' + DbNumberID; //выстраиваем  данные для POST

                    jQuery.ajax({
                        success: function (response) {
// в случае успеха, скрываем, выбранный пользователем для удаления, элемент
                            $('#item_' + DbNumberID).fadeOut("slow");
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
//выводим ошибку
                            alert(thrownError);
                        }
                    });
                });
            });
        })
    </script>




    {{--не учавствует--}}
    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                    <form action="{{ url('teamuser')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        {{\Auth::id()}}
                        {{\Auth::user()->name}}
                        <div class="form-group">

                            {{--// ДЛЯ ПОДПИСКИ ИЗЕРА НА ГРУППУ--}}
                            <?php  $a = \Auth::user()->id ?>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button id="user_id" name="user_id"
                                        value="{{ $a }}" type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Подписаться
                                </button>
                            </div>
                        </div>



                        <tr>
                            <div class="page_actions_wide clear_fix">
                                <div class="page_action_left fl_l">
                                    <div id="page_actions_btn"
                                         class="flat_button button_wide secondary page_actions_btn"
                                         onmouseover="Page.actionsPreloadFeedLists(this)"
                                         onclick="Page.actionsDropdown(ge('page_actions_wrap'), Page.actionsPreloadFeedLists.pbind(this, 1));"
                                         tabindex="0" role="button"><span
                                                class="page_actions_dd_label">Вы подписаны</span></div>
                                </div>
                            </div>
                            <form class="form-horizontal" role="form" method="GET" action="/team/show/teamusers">
                                <br><br>
                                <button id="public_subscribe" class="flat_button button_wide"
                                        onclick="{!! \Auth::id() !!}">Отписаться
                                </button>
                            </form>
                            {{--  {!! \Auth::user()->id !!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}
                            {{--  {!! \Auth::user()->name !!} {{--// провера на сущуствование юзера и показывает какой юзер зашел--}}


                        </tr>

                        <!-- Current Tasks -->
                        @if (count($teamusers) > 0)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Current Tasks
                                </div>

                                <div class="panel-body">
                                    <table class="table table-striped task-table">
                                        <thead>
                                        <th> id</th>
                                        <th>teams_id</th>
                                        <th>user_id</th>

                                        <th>&nbsp;</th>

                                        </thead>
                                        <tbody>
                                        @foreach ($teamusers as $teamuser)
                                            <tr>

                                                <td class="table-text"><div>{{ $teamuser->id }}</div></td>
                                                <td class="table-text"><div>{{ $teamuser->teams_id }}</div></td>
                                                <td class="table-text"><div>{{ $teamuser->user_id }}</div></td>

                                                <td>
                                                    <form action="{{ url('teamuser' ) }}" method="POST">
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
                    @endif
                </div>
            </div>
@endsection















