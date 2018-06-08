<!DOCTYPE html>


<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с изображениями в Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        table, th, td{
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
p><img src="/public/images/3.jpg" alt=" текст"></p>

<div class="container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Картинка</th>
        </tr>
        </thead>
        @foreach($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>{{ $image->title }}</td>
                <td><img src="{{ asset('images'.$image->img) }}"> </td>
            </tr>
        @endforeach

    </table>
</div>
</body>
</html>