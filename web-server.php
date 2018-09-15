<?php
$url = "http://university.netology.ru/u/fedorov/FedorovAO/dataphones.json";
$json = file_get_contents($url);
$dataPhone = json_decode($json,true);
//echo '<pre>';
//var_dump($dataPhone);
?>
<html>
<head>
    <title>Телефонная книга</title>
</head>
<body>
<table>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес прописки</td>
        <td>Номер домашнего телефона</td>
    </tr>
    <?php foreach ($dataPhone as $valuePhone => $itemPhone){?>
    <tr>
        <td><?php echo $itemPhone ['firstName'];?> </td>
        <td><?=$itemPhone ['lastName'];?></td>
        <td><?=$itemPhone ['address'];?></td>
        <td><?=$itemPhone ['phoneNumber'];?></td>
    </tr>
   <?php } ?>

</table>
</body>
</html>
