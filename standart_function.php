<?php
$city = '5601538';
$mode = 'json';
$units = 'metric';
$lang = 'ru';
$cnt = 5;
$appid = '20113cf214aeddf376ff03e5dde39062';
$hoursplus = 3;

header('Content-Type: text/html; charset=utf-8');
header("x-api-key: $appid");
$url =
    'http://api.openweathermap.org/data/2.5/forecast/daily?'.
    "appid=$appid&q=$city&mode=$mode&units=$units&cnt=$cnt&lang=$lang";
$data = @file_get_contents ($url);
if ($data) {
    $xmldata = new SimplexmlElement($data);
    $city = $xmldata->location->name;
    $latitude = round(xml_attribute($xmldata->location->location, 'latitude'), 2);
    $longitude = round(xml_attribute($xmldata->location->location, 'longitude'), 2);
    $sunrise = get_time_from_xml(xml_attribute($xmldata->sun, 'rise'), $hoursplus);
    $sunset = get_time_from_xml(xml_attribute($xmldata->sun, 'set'), $hoursplus);
    echo "$city ($latitude;$longitude); Восход: " . $sunrise . " Закат: " . $sunset . "<br>\n";
    $w = Array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'); //дни недели
    $winds = Array( //коды ветров
        'N' => 'С', 'NNW' => 'С/СЗ', 'NW' => 'СЗ', 'WNW' => 'З/СЗ',
        'W' => 'З', 'WSW' => 'З/ЮЗ', 'SW' => 'ЮЗ', 'SSW' => 'Ю/ЮЗ',
        'S' => 'Ю', 'SSE' => 'Ю/ЮВ', 'SE' => 'ЮВ', 'ESE' => 'В/ЮВ',
        'E' => 'В', 'ENE' => 'В/СВ', 'NE' => 'СВ', 'NNE' => 'С/СВ'
    );
    for ($i = 0; $i < count($xmldata->forecast->time); $i++) {
        $day = xml_attribute($xmldata->forecast->time[$i], 'day');
        $dt = date('d.m', strtotime($day));
        $wd = $w[date('w', strtotime($day))];
        echo $dt . ', ' . $wd . ': '; //22.04, Пт:
        $min = round(xml_attribute($xmldata->forecast->time[$i]->temperature, 'min'), 0);
        if ($min > 0) $min = '+' . $min;
        $max = round(xml_attribute($xmldata->forecast->time[$i]->temperature, 'max'), 0);
        if ($max > 0) $max = '+' . $max;
        if ($min != $max) $temperature = $min . '/' . $max;
        else $temperature = $min;
        echo $temperature . '&deg;'; // -2/+3
        $name = xml_attribute($xmldata->forecast->time[$i]->symbol, 'name');
        echo ', ' . $name; //, ясно
        $wind = xml_attribute($xmldata->forecast->time[$i]->windDirection, 'code');
        if (array_key_exists($wind, $winds))
            echo ', <font size="1">ветер:</font> ' . $winds[$wind] . ', ' .
                round(xml_attribute($xmldata->forecast->time[$i]->windSpeed, 'mps'), 0) . ' м/с'; //ветер: З, 3 м/с
        $pressure = xml_attribute($xmldata->forecast->time[$i]->pressure, 'value');
        $pressure = round($pressure * 0.75006375541921, 0); //переводим из hPa в mmHg
        if ($pressure) echo ', <font size="1">давление:</font> ' . $pressure . ' мм'; //давление: 755 мм
        $humidity = round(xml_attribute($xmldata->forecast->time[$i]->humidity, 'value'), 0);
        if ($humidity) echo ', <font size="1">влажность:</font> ' . $humidity . '%'; //влажность: 76%
        //$clouds = round(xml_attribute($xmldata->forecast->time[$i]->clouds, 'all'),0);
        //echo ', облачность '.$clouds.'%';
        echo "<br>\n";
    }
}
?>