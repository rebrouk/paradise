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
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    {{--<div class="form-group">--}}
                    {{--<label for="task-name" class="col-sm-3 control-label">Task</label>--}}

                    {{--<div class="col-sm-6">--}}
                    {{--<input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Add Task Button -->--}}
                    {{--<div class="form-group">--}}
                    {{--<div class="col-sm-offset-3 col-sm-6">--}}
                    {{--<button type="submit" class="btn btn-default">--}}
                    {{--<i class="fa fa-btn fa-plus"></i>Add Task--}}
                    {{--</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{--ВЫВОД КОЛОНКИ КУДА ЗАПИСЫВАТЬ ЗАДАЧУ И КНОПКА ДОБАВЛЕНИЯ ЗАДАЧИ--}}
                    @include('task.dobzadachi')
                    <!-- Current Tasks -->

                        {{--   ЭТОТ ИФ ДЛЯ ТОГО ЧТО БЫ ПОКА В ТАБЛИЦЕ $tasks   ЕСТЬ ОДИН ПОСТ ОН БУДЕТ ЕО ВЫВОДИТЬ НА ЭКРАН   хотя ВСЕ РАБОТАЕТ И БЕЗ НЕГО ЭТО ЧИСТО ДЛЯ ПРОВЕРКИ--}}
                        @if (count($tasks) > 0)


                            {{--ЭТА КОЛОНКА СОЗДАЕТ ТАБЛИЦУ "ЕУКУЩИЕ ЗАДАЧИ"   В КОТОРОЙ В СТОЛБИК ПОЯВЛЯЮТСЯ ПОСТЫ--}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Current Tasks
                                </div>

                                <div class="panel-body">
                                    <table class="table table-striped task-table">
                                        <thead>
                                        <th>Task</th>
                                        <th>date</th>

                                        <th>&nbsp;</th>

                                        </thead>
                                        {{--//////////////////////////////      П Л Ю С ЗАКРЫВАЮЩИЕСЯ ДИВЫ  --}}
                                        {{--                            @include('task.delete')--}}
                                        <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                            {{--<td class="table-text"><div>{{ $task->name }}</div></td>--}}
                                            {{--<td class="table-text"><div>{{ $task->id }}</div></td>--}}
                                            {{--<td class="table-text"><div>{{ $task->created_at }}</div></td>--}}
                                            {{--<td class="table-text"><div>{{ $task->updated_at }}</div></td>--}}

                                            {{--// ВЫНОСИТ ПОСТЫ ИЗ ТАБЛИЦИ TASKS   ИЗ ЭТОЙ ПАПКИ  TASK  ИЗ ФАЙЛА  VUVODPOST.BLADE.PHP--}}
                                            @include('task.vuvodpost')
                                            {{--@include('task.vuvodpost')--}}

                                            <!-- Task Delete Button -->
                                                <td>
                                                    {{--<form action="{{ url('task/'.$task->id) }}" method="POST">--}}
                                                    {{--{{ csrf_field() }}--}}
                                                    {{--{{ method_field('DELETE') }}--}}

                                                    {{--<button type="submit" class="btn btn-danger">--}}
                                                    {{--<i class="fa fa-btn fa-trash"></i>Delete--}}
                                                    {{--</button>--}}
                                                    {{--</form>--}}

                                                    {{--// ВЫНОСИТ КНОПКУ УДАЛИТЬ  ИЗ ЭТОЙ ПАПКИ  TASK  ИЗ ФАЙЛА  DELETE.BLADE.PHP--}}
                                                    @include('task.delete')
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
        </div>
    </div>




@endsection











