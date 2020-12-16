<?
$testCount=0;
if ($_POST["choose1"]="no"); {
	$testCount++;
}
if ($_POST["choose2"]="no"); {
	$testCount++;
}
if ($_POST["choose3"]="yes"); {
	$testCount++;
}
if ($_POST["choose4"]="no"); {
	$testCount++;
}
if ($_POST["choose5"]="no"); {
	$testCount++;
}
if ($_POST["choose6"]="no"); {
	$testCount++;
}
if ($_POST["choose7"]="no"); {
	$testCount++;
}
if ($_POST["choose8"]="no"); {
	$testCount++;
}
if ($_POST["choose9"]="yes"); {
	$testCount++;
}
if ($_POST["choose10"]="yes"); {
	$testCount++;
}
if ($_POST["choose11"]="no"); {
	$testCount++;
}
if ($_POST["choose12"]="no"); {
	$testCount++;
}
if ($_POST["choose13"]="yes"); {
	$testCount++;
}
if ($_POST["choose14"]="yes"); {
	$testCount++;
}
if ($_POST["choose15"]="no"); {
	$testCount++;
}
if ($_POST["choose16"]="no"); {
	$testCount++;
}
if ($_POST["choose17"]="no"); {
	$testCount++;
}
if ($_POST["choose18"]="no"); {
	$testCount++;
}
if ($_POST["choose19"]="yes"); {
	$testCount++;
}
if ($_POST["choose20"]="no"); {
	$testCount++;
}
echo ("<p>". "Имя: ". $_POST["nam"]);
echo ("<p>". "Результат теста");
if ($testCount>15) {echo ("<p>". "У Вас покладистый характер!");}
else if ($testCount>=8 and $testCount<=15) {echo ("<p>". "Вы не лишены недостатков, но с
вами можно ладить!");}
else if ($testCount<=8) {echo ("<p>". "Вашим друзьям можно посочувствовать!");}
?>