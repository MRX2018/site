<p>Лапшин Дмитрий Александрович
<p>
<?php
print ('<br>');
print ("Лабараторная работа №2".'<br>');
$per = rand(3,20);
$array = array();
$rez = array();
print ("Массив из ".($per). " элементов, заполненный двухзначными случайными числами: ".'<br>');
for ($i=0;$i<$per;$i++)
{
    $array[$i]=rand(10,99);
	print (($array[$i]).' ');
}
print ('<br>');
print ("Отсортированный	массив: ".'<br>');
sort($array);
print_r($array);
print ('<br>');
print ("Массив в обратном порядке: ".'<br>');
$rez = array_reverse($array);
print_r($rez);
print ('<br>');
print ("Массив после удаления последнего элемента: ".'<br>');
array_pop($rez);
print_r($rez);
print ('<br>');
print ("Сумма массива: ".'<br>');
$sum = array_sum($rez);
print_r($sum);
print ('<br>');
print ("Количество элементов в массиве: ".'<br>');
$count = count($rez);
print_r($count);
print ('<br>');
print ("Среднее арифметическое для элементов массива: ".'<br>');
$sred=$sum/$count;
print_r($sred); 
print ('<br>');
if (in_array(50, $rez)) {
	print ("Есть число 50 ".'<br>');
}
else{
	print ("Нет числа 50".'<br>');
}
print ("Массив из уникальных значений: ".'<br>');
$unik=array_unique($rez);
print_r($unik);
 ?>