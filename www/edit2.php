<html>
<head>
	<meta charset = "utf-8">
<title> Редактирование </title>
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
 $x=$_GET['id_dk'];
 $saveus = "SELECT buydate_dk, expdate_dk, id_os, id_ds, cost_dk, key_dk FROM dig_keys WHERE id_dk=".$x;
$rows=mysqli_query($link, $saveus); 
//'".$_GET['id_user']. "'"
 // запрос на выборку сведений о пользователях
while ($st=mysqli_fetch_array($rows)){
 $id_dk=$x;
 $buydate_dk = $st['buydate_dk'];
 $expdate_dk = $st['expdate_dk'];
 $id_os = $st['id_os'];
 $id_ds = $st['id_ds'];
 $cost_dk = $st['cost_dk'];
 $key_dk = $st['key_dk'];
 }
print "<form action='save_edit2.php' metod='get'>";
print "Дата покупки: <input name='buydate_dk' size='34' type='date' value='".$buydate_dk."'>";
print "<br>Дата истечения лицензии: <input name='expdate_dk' size='22' type='date' value='".$expdate_dk."'>";
$res = $link->query("SELECT id, os_name FROM os WHERE id<>$id_os");
$obj = $link->query("SELECT id, os_name FROM os");
if ($obj){
                    while ($row = $obj->fetch_array()){
						if ($id_os == $row['id'])
                        $title_e = $row['os_name'];
                    }
                }
 ?> 
<br> Код ОС:
<select name="id_os">
<?
echo "<option selected value='$id_os'>$title_e</option>";
while($row = $res->fetch_array()){
    ?>
    <option value="<?=$row['id']?>"><?=$row['os_name']?></option>
    <?
}
?>
</select> 
</br>
<?
$res = $link->query("SELECT id_ds, name_ds FROM dig_shop WHERE id_ds<>$id_ds");
$obj2 = $link->query("SELECT id_ds, name_ds FROM dig_shop");
if ($obj2){
                    while ($row = $obj2->fetch_array()){
						if ($id_ds == $row['id_ds'])
                        $hall_e = $row['name_ds'];
                    }
                }
 ?>
<br> Код магазина:
<select name="id_ds">
<?
echo "<option selected value='$id_ds'>$hall_e</option>";
while($row = $res->fetch_array()){
    ?>
    <option value="<?=$row['id_ds']?>"><?=$row['name_ds']?></option>
    <?
}
?>
</select> 
</br>
<?
print "<br>Цена ключа: <input name='cost_dk' size='35' type='text' value='".$cost_dk."'>";
print "<br>Ключ: <input name='key_dk' size='41' type='text' value='".$key_dk."'>";
print "<input type='hidden' name='id_dk' value='".$id_dk."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
ОС </a>";
?>
</body>
</html>
