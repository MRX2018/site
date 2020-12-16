<html>
<head> 
<meta charset = "utf-8">
<title> Добавление нового ключа </title> </head>
<body>
<H2>Добавление ключа в БД:</H2>
<form action="save_new2.php" metod="get">
<br>ID: <input name="id_dk" size="33" type="text">
<br>Дата покупки: <input name="buydate_dk" type="date">
<br>Дата истечения лицензии: <input name="expdate_dk"  type="date">
<?php
$mysqli = new mysqli("localhost", "f0491075_oc", "a141", "f0491075_oc");

if (!$mysqli) {
echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
// подключение к базе данных:



 ?> 
<br> Код ОС:
<select name="id_os">
    <option value="0">Выберите ОС</option>
<?
$res = $mysqli->query("SELECT id, os_name FROM os");
while($row = $res->fetch_array()){
    ?>
    <option value="<?=$row['id']?>"><?=$row['os_name']?></option>
    <?
}
?>
</select> 
</br>

<br> Код магазина:
<select name="id_ds">
    <option value="0">Выберите магазин</option>
<?
$res = $mysqli->query("SELECT id_ds, name_ds FROM dig_shop");
while($row = $res->fetch_array()){
    ?>
    <option value="<?=$row['id_ds']?>"><?=$row['name_ds']?></option>
    <?
}
?>
</select> 
</br>
<br>Цена ключа: <input name="cost_dk" size="24" type="text">
<br>Ключ: <input name="key_dk" size="30" type="text">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index2.php"> Вернуться к списку ключей </a>
</body>
</html>
