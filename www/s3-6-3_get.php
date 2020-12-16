<head> <meta charset ="utf-8"></head>
<?php

mb_internal_encoding( 'UTF-8'); 
mb_regex_encoding( 'UTF-8');  
ini_set('default_charset','utf-8');

echo ("Текст: ". $_POST['text1']);
echo ' <br/>';
$split=preg_split('//u', $_POST['text1'], null, PREG_SPLIT_NO_EMPTY);

$n_ch = array();
$ch = array();

$tmp=array();


$tmp[] = array_pop($split);
$tmp[] = array_pop($split);
$tmp[] = array_pop($split);
$tmp = array_reverse($tmp);

foreach ($split as $a=>$b){
	$tmp[]=$b;
	}
$result = implode($tmp, "");
echo ("Результат: ");
print_r($result);
