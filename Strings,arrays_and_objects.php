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


foreach ($continents as $continent => $animals)
{
    foreach ($animals as $animal)
   {
        $arr_two[] = "$animal";

       }
    }

       echo '<pre>';
       var_dump($arr_two);
      // var_dump($result);






