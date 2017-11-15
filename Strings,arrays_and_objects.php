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


foreach ($continents as $continent => $animals)//проходим по массиву $continents и создаем массив
    // $continent с ключами $animals
{

    foreach ($animals as $animal)//проходим по массиву $animals и даем значение $animal элементам
   {
        $result = explode(" ", $animal);//название животных в строку
        $animal_two = count($result);//разбиваем строку на слова и составляем массив
        //$two = в это массиве должны быть массивы состоящие из двух ключей, какой воспользоваться функцией?
       //у меня есть предположение - через for, это верно?

        echo '<pre>';
       //print_r($animal_two);
        //var_dump($continent);
        var_dump($animal);
        //var_dump($animal_two);
        //var_dump($result);

       }
    }



