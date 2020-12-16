<html>
<head>
	<meta charset = "utf-8">
 <title> OS </title> </head>
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

?>
<h4>Лапшин Дмитрий Александрович ПИ-318 Вариант 8</h4>
<h4>ОС:</h4>
<table border="1">
<tr>
  <th> ID </th> <th> Название </th> <th> Тип оборудования </th>  <th> Разрядность </th>  <th> Разработчик </th>  <th> Кол. пользователей </th> 
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($link, "SELECT id, os_name, os_hwtype, os_x, os_dev, os_usnum FROM os"); // запрос на выборку сведений об ос
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['os_name'] . "</td>";
    echo "<td>" . $row['os_hwtype'] . "</td>";
 echo "<td>" . $row['os_x'] . "</td>";
 echo "<td>" . $row['os_dev'] . "</td>";
  echo "<td>" . $row['os_usnum'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего ОС: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить ОС </a>

<h4>Цифровые магазины: </h4>

<table border="1">
<tr>
  <th> ID </th> <th> Название </th> <th> URL </th>  <th> Редактировать </th> <th> Уничтожить </th>
</tr>
<?php
$result1=mysqli_query($link, "SELECT * FROM dig_shop"); // запрос на выборку сведений о магазинах
while ($row1 = mysqli_fetch_array($result1)) {
	echo "<tr>";
	echo "<td>" . $row1['id_ds'] . "</td>";
	echo "<td>" . $row1['name_ds'] . "</td>";
    echo "<td>" . $row1['url_ds'] . "</td>";
	echo "<td><a href='edit1.php?id_ds=" . $row1['id_ds']
	. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
	echo "<td><a href='delete1.php?id_ds=" . $row1['id_ds']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	echo "</tr>";
	}
	print "</table>";
$num_rows2 = mysqli_num_rows($result1); // число записей в таблице БД
print("<P>Всего Магазинов: $num_rows2 </p>");
?>
</table>
<p> <a href="new1.php"> Добавить магазин </a>

<h4>Цифровые ключи: </h4>

<table border="1">
<tr>
  <th> ID </th> <th> Дата приобретения </th> <th> Дата окончания </th> 
	<th> ID ОС </th> <th> ID Магазина </th> <th> Стоимость </th> <th> Ключ </th>
  <th> Редактировать </th> <th> Уничтожить </th>
</tr>
<?php	
$result2=mysqli_query($link, "SELECT * FROM dig_keys"); // запрос на выборку сведений о ключах
while ($row2 = mysqli_fetch_array($result2)) {
	echo "<tr>";
	
	echo "<td>" . $row2['id_dk'] . "</td>";
	echo "<td>" . date('d-m-Y', strtotime($row2['buydate_dk'])). "</td>";
	echo "<td>" . date ('d-m-Y', strtotime($row2['expdate_dk'])) . "</td>";
	echo "<td>" . $row2['id_os'] . "</td>";
	echo "<td>" . $row2['id_ds'] . "</td>";
	echo "<td>" . $row2['cost_dk'] . "</td>";
	echo "<td>" . $row2['key_dk'] . "</td>";
	
	echo "<td><a href='edit2.php?id_dk=" . $row2['id_dk']
	. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
	echo "<td><a href='delete2.php?id_dk=" . $row2['id_dk']
	. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
	echo "</tr>";
		}
	print "</table>";
$num_rows3 = mysqli_num_rows($result2); // число записей в таблице БД
print("<P>Всего ОС: $num_rows3 </p>");
?>
</table>
<p> <a href="new2.php"> Добавить ключ </a>
<p> <a href="gen_pdf.php"> Сгенерировать отчет в PDF файле</a>
<p> <a href="gen_xls.php"> Сгенерировать отчет в XLS файле</a>

</body>
 </html>