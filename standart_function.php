<?php
$weath = 'http://api.openweathermap.org/data/2.5/weather?id=5601538';
file_get_contents($weath);
$api = json_decode($weath);

echo '<pre>';
var_dump($api);//Что-то пока не заходит, я ещё ночку посижу и доделаю.
//Вопрос только есть, как сделать что бы не ругался на неавторизованного пользователя?
