<?php
$link = mysqli_connect("localhost", "f0491075_oc", "a141", "f0491075_oc");
mysqli_query($link, 'SET NAMES utf-8');
 if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$somebody = "DELETE FROM dig_shop WHERE id_ds=".$_GET['id_ds'];
 mysqli_query($link, $somebody);
 header("Location: index2.php");
 exit;
?>