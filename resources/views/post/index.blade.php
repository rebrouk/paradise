


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
            <p><a href="/post/create">Создать пост</a> |
                <a href="/post/post" target="_blank">Ссылка в новом окне</a></p>
            </body>
            </html>


        {{--@extends ('app')--}}
{{--    @section('content')--}}
        @foreach($posts as $post)
            <article>
                <h2>{!! $post->title !!} </h2>
                <p>
                    {!!$post->excerpt !!}
                </p>
                <p>
                    published: {{$post->published_at}}
                </p>
                <p>
                    Date: {!! $post->created_at !!}
                </p>
                <p>
                    Content: {!! $post->content !!}
                </p>
                </article>
            @endforeach
    {{--@stop--}}

