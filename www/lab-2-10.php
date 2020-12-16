<p>Лапшин Дмитрий Александрович
<p>
<?php
 print ('<br>');
 print ("Лабараторная работа №2".'<br>');
 $treug=array(1,2,3,4,5,6,7,8,9,10);
 $kvd=array(1,2,3,4,5,6,7,8,9,10);
 $rez=array();
 $rez1=array();
 print ("Массив треугольных чисел:".'<br>');
foreach($treug as $k=>$n) {
    $treug[$k]=$n*($n+1)/2;
	 print (($treug[$k]).' ');
   }
     print ('<br>');
 print ("Массив квадртаных натуральных чисел:".'<br>');
 foreach($kvd as $a=>$b) {
    $kvd[$a]=$b*$b;
	print (($kvd[$a]).' ');
    }
 print ('<br>');
 print ("Массив результат: ".'<br>');
 $rez=array_merge($treug,$kvd);
 print_r($rez);
 print ('<br>');
 print ("Отсортированный массив: ".'<br>');
 sort($rez);
 reset($rez);
 while (list($key, $val) = each($rez)) {
 print ("rez [".($key)."] = ".($val).'; ');
}
 print ('<br>');
 print ("Массив с удаленный первым элементом: ".'<br>');
 array_shift($rez);
 print_r($rez);
 print ('<br>');
 print ("Массив с удаленными повторяющими элементами: ".'<br>');
 $rez1 = array_unique($rez);
 print_r($rez1);
?>