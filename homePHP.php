<?php
    $x = rand(0, 100);
    $a = 1;
    $b = 1;
    $c = 0;
    do {
        if ($a > $x) {
            echo "Задуманное число НЕ входит в числовой ряд";
            break;
        } elseif ($a == $x) {
            echo "Задуманное число входит в числовой ряд";
            break;
        } else {
            $c = $a;
            $a= $a + $b;
            $b = $c;
        }
    } while (true);
