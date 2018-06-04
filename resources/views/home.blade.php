{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        You are logged in!
                    </div>
                    <div class="panel-body">
                        <table width="100%">
                            <tr>
                                <td width="30%">В сети</td>
                                <td width="70%">Email</td>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        @if($user->isOnline())
                                            <span style="color:green">В сети</span>
                                        @else
                                            <span style="color:red">Не в сети</span>
                                        @endif
                                    </td></pre>
                                    <td>{{ $user->email }}</td>
                                    <pre>                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection