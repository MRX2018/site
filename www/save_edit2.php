<html>
<head> <meta charset = "utf-8"> </head> 
<body>
<?php
$link = mysqli_connect("localhost", "f0491075_oc", "a141", "f0491075_oc");
mysqli_query($link, 'SET NAMES utf-8');
 if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 // подключение к базе данных:
 mysqli_select_db($link, "f0491075_oc");

 $anotherquery = "UPDATE dig_keys SET buydate_dk='".$_GET['buydate_dk']."', 
 expdate_dk='".$_GET['expdate_dk']."', id_os='".$_GET['id_os']."',
 id_ds='".$_GET['id_ds']."', cost_dk='".$_GET['cost_dk']."', 
 key_dk='".$_GET['key_dk']."' WHERE id_dk=".$_GET['id_dk'];

 mysqli_query($link, $anotherquery);
 
 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
ключей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index2.php">
Вернуться к списку ключей</a> '; } 
?>
</body>
 </html>
