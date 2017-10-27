<?php
    $x = 0;
    $a = 1;
    $b = 1;
    switch($a || $x)  {
      case $a > $x:
          echo "Задуманное число НЕ входит в числовой ряд";
      break;

      case $a == $x:
        echo "Задуманное число  входит в числовой ряд";
      break;
      case$x = $a;
      break;
      case $a++:
      break;

             }



         //echo "<pre>"; var_dump($res); echo "</pre>";
 ?>
 <form action="">
   <p><label>Введите число: <input name="comment" dirname="$x" required></label></p>
   <p><button type="submit">Отправить</button></p>
  </form>
