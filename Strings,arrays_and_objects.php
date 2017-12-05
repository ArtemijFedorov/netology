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
        'Canis dingo']

];

$name_two_words = [];
foreach($continents as $continent => $animals){
    foreach($animals as $animal){
        $all_animals= [];
        $anim = explode(' ', $animal);
        $all_animals[]=$anim;

        foreach($all_animals as $k){
            if(count($k) === 2){
                $comma_separated = implode(",", $k);
                $str = str_replace(',', ' ', $comma_separated);
                $name_two_words[]=$str;
            }
        }
    }
}


foreach($name_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

$random_first_word = [];

while (count($random_first_word) < count($name_two_words)){
    $proverka = $first[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_first_word)) {
        array_push($random_first_word, $proverka);
    }
}



$random_second_word = [];

while (count($random_second_word) < count($name_two_words)){
    $proverka = $second[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_second_word)) {
        array_push($random_second_word, $proverka);
    }
}



$final_result = [];

for($i = 0; $i < count($name_two_words); $i++){
    $final_result[]= $random_first_word[$i] . ' ' . $random_second_word[$i];
}
echo '<pre>';
var_dump($final_result);






