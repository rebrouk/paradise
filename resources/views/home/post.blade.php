

@extends('layouts.posts')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link  type="text/css" media="all" href="{{asset('css')}}/comments.css" />
</head>
<body>
@yield('menu')
@yield('content')
@yield('comments')
</body>
</html>
@section('comments')
    @include('comments_block')
@endsection


