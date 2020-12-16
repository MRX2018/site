<p>Лапшин Дмитрий Александрович
<p>
<?
print ("Вариант 1".'<br>');
$n=rand(1,1000);
print ("Число $n:".'<br>');
for ($i=1; $i<=$n; $i++) {
if ($n % $i==0){ print ("$i".'<br>');}
}
?>
<p>
<?
print ("Вариант 4".'<br>');
$a=rand(1,50);
$b=rand(51,200);
print ("<p> Числа из отрезка [".$a.",".$b."] делящиеся на сумму из своих цифр без остатка<br>");
 
for ($i=$a; $i<=$b; ++$i) {
    $c = 1;# c
    $tmp=$i;
    do {
		$sub = $tmp/array_sum(str_split($tmp));
		//echo $sub;
        //$sub= $tmp % 10;
#       echo "<dt>$sub = $tmp % 10</dt>";
        if (!$sub) {#  деление на 0
            $c = 0;
            break 1;
        }
        if ($i%$sub) {# с остатком
            $c = 0;
            break 1;    
        }
    } while (($tmp = floor( $tmp/10)));
    if($c) echo $i."<br>";
}


?>
<p>