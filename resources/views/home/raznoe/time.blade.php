<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 20.04.2018
 * Time: 15:08
 */


// парсер изображений и описания состояний
$col = 1; // кол-во дней (до 10, увеличивается время выдачи)
$data_file = 'http://weather.yandex.ru/static/cities.xml';
$xml = simplexml_load_file($data_file);

foreach ($xml->country as $key => $value) {
    foreach ($value->city as $key1 => $value1):
        $out = getWeather($value1["id"], $col);
        foreach ($out as $day):
            foreach ($day['weather'] as $weather):
                $types[(string)$weather['weather_type']] = (string)$weather['image'];  // массив описаний состояния с изображением
                $images[(string)$weather['image']] = (string)$weather['weather_type']; // массив изображений с описанием состояния
            endforeach;
        endforeach;
    endforeach;
}
foreach($types as $type=>$img):
    echo '<img src="1450829064400515107291" width="48" height="48" /> -'. $type.'<br />';
endforeach;
echo '<br><hr><br>';
foreach($images as $img=>$type):
    echo '<img src="1450829064400515107291" width="48" height="48" /> -'. $type.'<br />';
endforeach;
/*
заполняем массив при помощи функции, первый параметр идентификатор города, другие параметры необязательны - в этом случае используется значения по умолчанию
*/
function getWeather($city, $col = 10) {
    $data_file = 'http://export.yandex.ru/weather-ng/forecasts/'.$city.'.xml';   // загружаем файл прогноза погоды для выбранного города
    $xml = simplexml_load_file($data_file); // загружаем xml файл через simple_xml

    $out = array(); // массив вывода прогноза
    $counter = 0 ; // счетчик количества дней, для которых доступен прогноз

    if($xml->day):
        foreach($xml->day as $day):

            if($counter == $col) break;
            for ($i=0;$i<=3;$i++) {
                $out[$counter]['weather'][$i]['image'] = $day->day_part[$i]->{'image-v3'};
                $out[$counter]['weather'][$i]['weather_type'] = $day->day_part[$i]->weather_type;
            }
            $counter++ ;
        endforeach;
    endif;
    return $out ;


//    $city_id = 27612; // id Москвы
//    $url = 'http:   //export.yandex.ru/weather-ng/forecasts/'.$city_id.'.xml';
//    $userAgent = 'Googlebot/2.1 (+http://www.google.com/bot.html)';
//    $xml = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'weather_'.$city_id.'.xml';
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
//    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
//    $output = curl_exec($ch);
//    $fh = fopen($xml, 'w');
//    fwrite($fh, $output);
//    fclose($fh);




$city_id = 27612; // id Москвы
$xml = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'weather_'.$city_id.'.xml';
if(file_exists($xml)):
$data = simplexml_load_file($xml); //грузим ?>
<style type="text/css">
    .weather{position:relative;border-bottom:1px solid #d5d5d5;padding-bottom:35px;}
    .weather .date{font-size:13px;font-weight:700;padding-bottom:5px;text-transform:uppercase;border-bottom:1px solid #d5d5d5;margin-top:10px;}
    .weather .item{background-color:#f0eedc;padding:15px;font-family:Georgia;margin-bottom:20px;}
    .weather .item table{border:0;width:100%;}
    .weather .item table td{padding-bottom:15px;width:20%;vertical-align:baseline;padding-right:5px;}
    .weather .item .day-part td{font-size:18px;}
    .weather .item .day-temp td{font-size:30px;}
    .weather .item .day-temp td img{margin-left:5px;}
    .weather .item .day-param td{font-size:12px;}
    .weather .item .day-param td p{padding-bottom:3px;}
    .weather .days{margin-top:35px;border:0;width:100%;}
    .weather .days td{width:50%;padding-bottom:35px;}
    .weather .days a{font-family:Georgia;font-size:18px;text-decoration:underline;font-weight:700;}
</style>
<div class="weather"><?php
    foreach($data->day as $day):?>
    <div class="date"><?php echo getDayDate($day['date']);?></div>
    <div class="item">
        <table>
            <tr class="day-part">
                <td>Утром</td>
                <td>Днем</td>
                <td>Вечером</td>
                <td>Ночью</td>
            </tr>
            <tr class="day-temp">
                <?php for($i = 0;$i < 4;$i++): // т.к. нам не нужны данные day_short и night_short, мы останавливаем проход на 4
                $img = $day->day_part[$i]->{'image-v3'};?>
                <td><?php echo getTempSign($day->day_part[$i]->{'temperature-data'}->avg);?> °C <img src="" width="48" height="48" /></td><?php endfor;?>
            </tr>
            <tr class="day-param">
                <?php for($i = 0;$i < 4;$i++): // т.к. нам не нужны данные day_short и night_short, мы останавливаем проход на 4?>
                <td>
                    <p><strong><?php echo $day->day_part[$i]->weather_type;?></strong></p>
                    <p>ветер: <?php echo getWindDirection($day->day_part[$i]->wind_direction).' '.$day->day_part[$i]->wind_speed;?> м/с</p>
                    <p>влажность: <?php echo $day->day_part[$i]->humidity;?>%</p>
                    <p>давление: <?php echo $day->day_part[$i]->pressure;?> мм рт. ст.</p>
                </td>
                <?php endfor;?>
            </tr>
        </table>
    </div><?php
    endforeach;?>
</div><?php
endif;
// получаем локализованную дату
function getDayDate($date)
{
    $date = strtotime($date);
    $months = array('','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
    $days = array('воскресенье','понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота');
    return $days[date('w', $date)].', '.(int)date('d',$date).' '.$months[date('n', $date)];
}
// получаем знак температуры
function getTempSign($temp)
{
    $temp = (int)$temp;
    return $temp > 0 ? '+'.$temp : $temp;
}
// получаем направления ветра
function getWindDirection($wind)
{
    $wind = (string)$wind;
    $wind_direction = array('s'=>'↑ ю','n'=>'↓ с','w'=>'→ з','e'=>'← в','sw'=>'↗ юз','se'=>'↖ юв','nw'=>'↘ сз','ne'=>'↙ св');
    return $wind_direction[$wind];
}
//}