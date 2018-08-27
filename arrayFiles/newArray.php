<?php
$continents = [
    "Africa" => [
        "Camelus",
        "Ceratotherium simum"],

    'Europa' => [
        'Capra lucum ibex',
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
        'Canis dingo']

];

$two_animals = [];
foreach($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        $words = (explode(' ', $animal));
       // $two_animals = [];
        if (count($words) == 2) {
            $two_animals[] = $words;
        }
    }
}
echo '<pre>';
var_dump($two_animals);
//var_dump(count($two_animals));

foreach($two_animals as $two_word) {
    $word = explode(' ', $two_word);
    $first_name[] = $word[0];
    $second_name[] = $word[1];
}
//$first_name = array_map(function ($a){return explode(' ', $a)[0];}, $two_animals);
//$second_name = array_map(function ($a){return explode(' ', $a)[1];}, $two_animals);

shuffle($first_name);
shuffle($second_name);

$curise_name = [];
for ($i = 0; $i < count($two_animals); $i++){
    $curise_name[] = $first_name[$i]. " ".$second_name[$i];
}

echo '<pre>';
var_dump($curise_name);
