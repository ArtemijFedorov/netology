<?php
$continents = [
    'Africa' => [
        'Camelus',
        'Ceratotherium simum'],

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

echo '<pre>';
foreach ($continents as $continent => $animals)
{
    foreach ($animals as $animal)
    {
        $result = explode(" ", $animal);
        $animal_two = count($result);
        echo '<pre>';
        print_r ($animal_two); PHP_EOL;

        }
    }

  //  $result = explode(" ", $animal);

   // echo ($result[1);







