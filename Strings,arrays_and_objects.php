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
/*$arrayFinal = array()
foreach ($continents as $continent => $animals)
{
    foreach ($animals as $animal)
    {
       // $result = explode(" ", $animal);
       // $animal_two = count($result);

        

        echo '<pre>';

       //print_r($animal_two);
        //var_dump($arrayFinal);
        //var_dump($continent);


        }
    }
*/


$arrayFinal = array(); // Массив из животных, состоящих из 2 слов
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