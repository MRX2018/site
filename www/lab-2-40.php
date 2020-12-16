<p>Лапшин Дмитрий Александрович
<p>
<?php
print ('<br>');
print ("Лабараторная работа №2 / Вариант 4 и 9 и 14".'<br>');
print ("Вариант 4".'<br>');
$xe = rand(5,25);
for($i=0; $i<$xe; $i++) {
$arr[$i] = rand(-10,10);
}
print_r($arr);
print ('<br>');
$arr1 = [];
 
$i = 0;
 
foreach($arr as $v){
    if($v > 0){
        $i++;
    }else{
        $arr1[] = $i;
        $i = 0;
    }
}
echo 'Максимальное количество подряд идущих положительных элементов - ' . max($arr1);
print ('<br>');
?>
<?php
print ('<br>');
print ("Вариант 9".'<br>');
print ("Массив №1 чисел: ".'<br>');
$number = array();
$number2 = array();
for ($i=0; $i<20; $i++)
	{
	$number[$i] = rand(-100, 100);
	}
print_r ($number);
print ('<br>');
print ("Массив №2 чисел: ".'<br>');
$number3 = array();
for ($i=0; $i<20; $i++)
	{
	$number3[$i] = rand(-100, 100);
	}
print_r ($number3);
print ('<br>');
$col = 0;
for ($i=0; $i<20; $i++)
	{
	if ($number[$i] == $number3[$i])
	{
		$col++;
	}
	}
if ($col == 20){
	print ("Массивы равны".'<br>');
} else {
	print ("Массивы не равны".'<br>');
}
print ('<br>');
?>
<?php
$number5= array();
print ("Вариант 14".'<br>');
print ("Массив чисел: ".'<br>');
for ($i=0; $i<20; $i++)
	{
	$number5[$i] = rand(-100, 100);
	}
print_r ($number5);
print ('<br>');

$min = min($number5);
print ("Минимальный элемент: $min".'<br>');

$da = rand(0, 9);
$db = rand(10, 20);
print ("Диапозон от $da до $db".'<br>');

for ($i=$da; $i<=$db; $i++)
	{
		$number5[$i] = $min;
	}
print ("Результат: ".'<br>');
print_r ($number5);
?>