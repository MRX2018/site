<p>Лапшин Дмитрий Александрович
<p>
<?php
 print ("Значение a равно A".'<br>');
$а = "А";
switch ($а) {
case 'А' :
 echo 'Переменная имеет значение "А"'; break;
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден ' ;
}
 print ('<br>'.'<br>');
 print ("Значение a равно B".'<br>');
$а = "B";
switch ($а) {
case 'А' :
 echo 'Переменная имеет значение "А"'; break;
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден ' ;
}
 print ('<br>'.'<br>');
 print ("Значение a равно C".'<br>');
 $а = "C";
switch ($а) {
case 'А' :
 echo 'Переменная имеет значение "А"'; break;
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден ' ;
}
 print ('<br>'.'<br>');
  print ("Значение a равно A\Отсутствует BREAK в первой части".'<br>');
$а = "А";
switch ($а) {
case 'А' :
 echo 'Переменная имеет значение "А"';;
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден ' ;
}
print ('<br>');
?>