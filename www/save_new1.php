<html>
<head>
<meta charset = "utf-8">
</head>
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
 // Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO dig_shop (id_ds, name_ds, url_ds) VALUES ('".$_GET['id_ds']."','".
$_GET['name_ds']. "', '".$_GET['url_ds']."')";
 mysqli_query($link, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрировали свой магазин в базе данных.";
 print "<p><a href=\"index2.php\"> Вернуться к списку магазинов </a>"; }
 else { print "Ошибка сохранения. <a href=\"index2.php\">
Вернуться к списку магазинов </a>"; }
?>
</body>
</html>

