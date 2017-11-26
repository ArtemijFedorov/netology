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
    //echo '<pre>';
    //var_dump($animals);
   // var_dump($continent);
    //var_dump('Africa');

    foreach ($animals as $animal)//проходим по массиву $animals и даем значение $animal элементам
   {
        $arr_two[] = "$animal";// массив и животных
      // if (strpos($arr_two, ' ') !== false);
       // как сделать новый массив из животных из 2-х слов - if (strpos($arr_two, ' ') !== false) не помогает

       
        //$result = explode(" ", $animal);//название животных в строку
       // $animal_two = count($result);//разбиваем строку на слова и составляем массив
        //$two = в это массиве должны быть массивы состоящие из двух ключей, какой воспользоваться функцией?
       //у меня есть предположение - через for, это верно?

        //echo '<pre>';
        //var_dump($animal);
        //var_dump($animal_two);
        //var_dump($result);
       //var_dump($arr_two);

       }
    }

       echo '<pre>';
       var_dump($arr_two);
      // var_dump($result);




