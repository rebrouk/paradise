@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                     <div class="panel-body">

                         @include('common.errors')


                           <!-- Task Name -->
                         @include('task.dobzadachi')
                             @if (count($egos) > 0)

                         <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                <th>Task imya</th>
                                <th>ID</th>
                                <th>Data sozdaniya</th>

                                <th>&nbsp;</th>

                                </thead>
                                <tbody>

                                @foreach ($egos as $ego)
                                    <tr>

                                        <td class="table-text">
                                            <div>{{ $ego->name }}</div></td>
                                        <td class="table-text">
                                            <div>{{ $ego->id }}</div></td>
                                        {{--<td class="table-text">--}}
{{--                                            <div>{{ $ego->created_at }}</div></td>--}}




                                        {{--// ВЫНОСИТ КНОПКУ УДАЛИТЬ ПОСТ   И ПЕРЕНОСИТ В ПАПКУ TASK ФАЙЛ    TASKS.BLADE.PHP--}}
                                        <td class="table-text">
                                            <div>{{ $ego->updated_at }}</div>
                                        <td>

                                        <form action="{{ url('/ego'.$ego->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                            {{--                                @include('task.delete')--}}
                                        </form>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--echo 2324;--}}
                    {{--@include('task.dobzadachi')--}}
                    {{--@include('task.vuvodpost')--}}
                    {{--@include(view('task.dobzadachi'))--}}
                             @endif
                </div>
            </div>
        </div>
    </div>


@endsection()












