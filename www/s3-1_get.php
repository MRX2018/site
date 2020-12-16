<?php
if ($_POST["a"]>$_POST["b"]) {
	echo ($_POST["a"]." больше");
}
else if ($_POST["b"]>$_POST["a"]) {
	echo ($_POST["b"]." больше");
}
else {
	echo ($_POST["a"]." равно " .$_POST["b"]);
}
?>