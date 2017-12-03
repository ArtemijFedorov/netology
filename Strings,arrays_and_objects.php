<?php
$continents = [
    "Africa" => [
        "Camelus",
        "Ceratotherium simum"],

    'Europa' => [
        'Capra ibex',
        'Ursus arctos'],

    'Asia' => [
        'Ailuropoda melanoleuca',
        'Hippotigris'],

    'South Pole' => [
        'White Bear',
        'Aptenodytes forsteri'],


    'South America' => [
        'Panthera onca',
        'Crocodilia'],

    'North America' => [
        'Grizzly bear',
        'Heloderma suspectum'],

    'Australia' => [
        'Kenkguru',
        'Canis lupus dingo']

];


    foreach ($continents as $continent => $animals) {


        foreach ($animals as $animal) {//название животных в строку
            //echo '<pre>';
            //var_dump($item);
            $tmp = explode(' ', $animal);//разбиваем строку на слова и составляем массив
            $a_1[] = $tmp[0];
            $a_2[] = $tmp[1];
            //echo '<pre>';
            //var_dump($tmp);
        }
    }
    shuffle($a_1);
    shuffle($a_2);
    for ($i = 0, $j = count($a_1); $i < $j; $i++) {
        $out[] = $a_1[$i] . ' ' . $a_2[$i];
    }
echo '<pre>';
var_dump($out);






