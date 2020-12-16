<?php
$inputLogin = $_POST["login"];
$checkLogin = 0;

if ($inputLogin=="admin") {
	$checkLogin = 1;
}
else if ($inputLogin=="user1") {
	$checkLogin = 2;
}
else if ($inputLogin=="user2") {
	$checkLogin = 3;
}
else if ($inputLogin=="user3") {
	$checkLogin = 4;
}
switch ($checkLogin) {
	case 1:
	echo ("Авторизованный пользователь: ". $inputLogin . "<p>". "Добро пожаловать!");
	break;
	
	case 2:
	echo ("Авторизованный пользователь: ". $inputLogin . "<p>". "Добро пожаловать!");
	break;
	
	case 3:
	echo ("Авторизованный пользователь: ". $inputLogin . "<p>". "Добро пожаловать!");
	break;
	
	case 4:
	echo ("Авторизованный пользователь: ". $inputLogin . "<p>". "Добро пожаловать!");
	break;
	
	default:
	echo ("Ошибка авторизации!". "<p>". "Такого пользователя не существует. Проверьте правильность ввода.");
	break;
}
?>

