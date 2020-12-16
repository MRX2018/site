<p>Лапшин Дмитрий Александрович
<p>
<?php
print ('<br>');
print ("Лабараторная работа №2".'<br>');
$cust = array ('cnum' => 2001,'cname' => 'Hoffman','city' => 'London','snum' => 1001);
$cust['rating'] = 100;
foreach($cust as $k => $v)
print (($k).": ".($v).'<br>');
$cust = array('cnum', 'cname', 'city','snum');
sort($cust);
print_r($cust);
print ('<br>');
$cust[] = 'rating';
ksort($cust);
print_r($cust);
?>