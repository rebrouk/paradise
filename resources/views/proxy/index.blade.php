{{--// ВЫНОСИТ КНОПКУ УДАЛИТЬ ПОСТ   И ПЕРЕНОСИТ В ПАПКУ TASK ФАЙЛ    TASKS.BLADE.PHP--}}

@extends('layouts.app')

@section('content')

{{--<div class="container">--}}
    {{--<div class="col-sm-offset-2 col-sm-8">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--New Task--}}
            {{--</div>--}}

            {{--<div class="panel-body">--}}

@include('common.errors')

{{--@foreach ($egos as $ego)--}}
    {{--<tr>--}}

        {{--<td class="table-text">--}}
            {{--<div>{{ $ego->name }}</div></td>--}}
        {{--<td class="table-text">--}}
            {{--<div>{{ $ego->id }}</div></td>--}}
        {{--<td class="table-text">--}}
            {{--<div>{{ $ego->created_at }}</div></td>--}}
        {{--<td class="table-text">--}}
            {{--<div>{{ $ego->updated_at }}</div></td>--}}


        {{--// ВЫНОСИТ КНОПКУ УДАЛИТЬ ПОСТ   И ПЕРЕНОСИТ В ПАПКУ TASK ФАЙЛ    TASKS.BLADE.PHP--}}
        {{--<td class="table-text">--}}
            {{--<div>{{ $ego->updated_at }}</div>--}}
        {{--<td>--}}

            {{--<form action="{{ url('/ego'.$ego->id) }}" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--{{ method_field('DELETE') }}--}}

                {{--<button type="submit" class="btn btn-danger">--}}
                    {{--<i class="fa fa-btn fa-trash"></i>Delete--}}
                {{--</button>--}}
                {{--                                @include('task.delete')--}}
            {{--</form>--}}

        {{--</td>--}}

    {{--</tr>--}}
{{--@endforeach--}}
<?php
//                $egos = Ego::orderBy('created_at', 'asc')->get();
//
//                return view ('egos', [
//                'egos' => $egos
//                ]);
?>

{{--<td class="table-text">--}}
    {{--<div>{{ $ego->updated_at }}</div>--}}
{{--<td>--}}


    @endsection