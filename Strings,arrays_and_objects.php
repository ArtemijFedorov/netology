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
            echo $animal, PHP_EOL;

        }
    }

    $result = explode(" ", $animal);

    echo $result[0];







