
{{--///   ОТБОРАЖЕНИЕ КАРТЫ ЯНДЕКС КАРТЫ  СО ВСЕМИ ЕЕ ФЕНКЦИЯМИ--}}

                <div id="map" style="width: 600px; height: 450px"></div>

                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
                        <script        type="text/javascript"></script>
                    <script type="text/javascript">
                    var myMap;
                    ymaps.ready(init); // Ожидание загрузки API с сервера Яндекса
                    function init() {
                        myMap = new ymaps.Map("map", {
                            center: [55.76, 37.64], // Координаты центра карты
                            zoom: 10 // Zoom
                        });
                    }

                </script>

<title>Примеры. Отображение собственных тайлов на карте.</title>
<meta charset="utf-8">

<style>
    html, body, .map {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="custom_map.js"></script>
</head>
<body>
<div id="map" class="map"></div>
</body>




                {{--<!DOCTYPE html>--}}
                {{--<html>--}}
                {{--<head>--}}
                    {{--<title>Примеры. Определение местоположения пользователя</title>--}}
                    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
                    {{--<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>--}}
                    {{--<script src="geolocation.js" type="text/javascript"></script>--}}
                    {{--<style>--}}
                        {{--html, body, #map {--}}
                            {{--width: 100%; height: 100%; padding: 0; margin: 0;--}}
                        {{--}--}}
                    {{--</style>--}}
                {{--</head>--}}
                {{--<body>--}}
                {{--<div id="map"></div>--}}
                {{--</body>--}}
                {{--</html>--}}
                {{--<html>--}}
