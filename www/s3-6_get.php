<head> <meta charset ="utf-8"></head>
<?php
echo ("Строка: ". $_POST["text1"]);
$arr1=mb_split(" ", $_POST["text1"]);
$deleteLine=$_POST["text2"];
echo ("<p>". "Удаляемое слово: ". $_POST["text2"]);
for ($i=0;$i<=(count($arr1));$i++) {
	if ($arr1[$i]==$deleteLine) {
		$arr1[$i]="";
	}
}
$uniteLine = implode (" ", $arr1);
echo ("<p>". "Строка после удаления: ". $uniteLine);
?>
