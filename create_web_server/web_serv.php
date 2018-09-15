<!DOCTYPE>
<?php
//$url = "dataphones.json";
if (!empty($_FILES) || array_key_exists('test', $_FILES)) {
move_uploaded_file($_FILES['phones']['tmp_name'], 'PHPphones.json');}
//var_dump($_FILES);
$url = "PHPphones.json";
$json = file_get_contents($url);
$dataPhone = json_decode($json,true);
?>
<html lang="en/ru">
<head>
    <title>Телефонная книга</title>
</head>
<body>
<form enctype="multipart/form-data" action="web_serv.php" method="POST">
    <div><input type="file" name="phones"></div>
    <input type="submit" value="Отправить">
</form>
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
