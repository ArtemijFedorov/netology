<?php
$userfirstName = "Артемий";
$usersecondName = "Фёдоров";
$userAge = "26 лет";
$userMail = "original_ti@mail.ru";
$userProf = "Сетевой инженер";
?>
<!DOCTYPE>
<html lang="Ru-ru">
<head>
    <title><?= $userfirstName . ' – ' . $userProf ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>Страница пользователя <?= $userfirstName ?></h1>
<div>
    <h1 style="color: #e0be70;   text-decoration: overline;">Иноформация о пользователе</h1>
    <p style="color: red; font-style: italic;">Имя: <strong><?= $userfirstName ?></strong></p>
    <p style="color: blue; font-style: oblique;">Фамилия: <strong><?= $usersecondName ?></strong></p>
    <p style="color:green; font-family: monospace;font-size: 18px">Возраст: <strong><?= $userAge ?></strong></p>
    <p style="font-stretch: ultra-expanded; color: #61b9a9;text-transform: uppercase;">Mail: <strong><?= $userMail ?></strong></p>
    <p style="color: #9995e1; text-transform: capitalize;">Профессия: <strong><?= $userProf ?></strong></p>

</div>
</body>
</html>
