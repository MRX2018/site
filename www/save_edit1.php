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
 $x=$_GET['id_ds'];
$anotherquery = "UPDATE dig_shop SET name_ds='".$_GET['name_ds']."', url_ds='".$_GET['url_ds']."' WHERE id_ds=".$x;
 mysqli_query($link, $anotherquery);
 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
магазинов </a>'; }
 else { echo 'Ошибка сохранения. <a href="index2.php">
Вернуться к списку магазинов</a> '; } 
//$saveus = "SELECT os_name, os_hwtype, os_x, os_dev, os_usnum FROM os WHERE id=".$x;
?>
</body>
 </html>
