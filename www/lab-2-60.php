<HTML>
<BODY>
<TABLE border=1>
<?php
print ("Лапшин Д.А. ПИ-318 Вариант 4".'<br>');
$number2 = array();
$number = [
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
[rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100),	rand(-50,100)],
];
for ($i=0; $i<10; $i++) {
 echo ("<tr>"); 
 for ($k=0; $k<10; $k++) { 
 echo ("<td align=center>"); 
 echo ($number[$i][$k]); 
 echo ("</td>"); 
 }
 echo ("</tr>"); 
}
for ($i=0; $i<10; $i++) {
 for ($k=0; $k<10; $k++) { 
 $number2[$i][$k] = $number[$i][$k]; 
 }
}
$arr = array();
for ($i=0; $i<10; $i++) {
 for ($k=0; $k<10; $k++) { 
 $arr[$i] =$arr[$i] + $number[$k][$i]; 
 } 
}
$arr2 = array();
for ($i=0; $i<10; $i++) {
 for ($k=0; $k<10; $k++) { 
 $arr2[$i] =$arr2[$i] + $number[$i][$k]; 
 } 
}

print ("Вектор: ");
for ($i=0; $i<10; $i++) {
	print ($arr[$i]);
	print ("; ");
}
print ('<br>');
?>
</TABLE>
<TABLE border=1>
<?php
print ("Вариант 8".'<br>');

for ($i=0; $i<10; $i++) {
	$number2[$i][$i]= $arr2[$i]-$arr[$i];
}

for ($i=0; $i<10; $i++) {
 echo ("<tr>"); 
 for ($k=0; $k<10; $k++) { 
 echo ("<td align=center>");
 if ($i == $k) {
	 echo ('<p style="color:red">'.($number2[$i][$k]).'</p>');
 } else {
	 echo ($number2[$i][$k]); 
 }
 
 //
 echo ("</td>"); 
 }
 echo ("</tr>"); 
}
?>
</TABLE>
</BODY>
</HTML>