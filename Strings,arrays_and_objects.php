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

foreach ($continents as $continent => $animals)
{
    foreach ($animals as $animal)
    {
       // $result = explode(" ", $animal);
       // $animal_two = count($result);

        $names = array_map(function($a){return explode(' ', $a)[0];}, $animals);
        $types = array_map(function($a){return explode(' ', $a)[1];}, $animals);
        shuffle($names);
        shuffle($types);
        $random_result=array();
        for($i=0; $i< count($animals); $i++){
            $random_result[] = ( $names[$i]." ".$types[$i]);
        }
        echo '<pre>';
        print_r($random_result);





       //print_r($animal_two);
        //var_dump($arrayFinal);
        //var_dump($continent);


        }
    }



/*$arrayFinal = array(); // Массив из животных, состоящих из 2 слов
foreach ($continents as $continent => $animals)
{
    foreach ($animals as $animal) {
        if (strpos($animal, ' ') !== false) { // Проверяем на наличие пробела между словами
            array_push($arrayFinal, $animal);
        }
    }
}
echo '<pre>';
print_r($arrayFinal);
/*
 *
 */
