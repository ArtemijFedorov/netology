<?php
    $userNumber = rand(0, 100);
    $numderA = 1;
    $numberB = 1;
    $numberC = 0;
    do {
        if ($numderA > $userNumber) {
            echo 'Задуманное число НЕ входит в числовой ряд';
            break;
        } elseif ($numderA == $userNumber) {
            echo 'Задуманное число входит в числовой ряд';
            echo 'Чило ' . "$userNumber" 
            break;
        } else {
            $numberC = $numderA;
            $numderA= $numderA + $numberB;
            $numberB = $numberC;
        }
    } while (true);
