<head> <meta charset ="utf-8"></head>
<?php

mb_internal_encoding( 'UTF-8'); 
mb_regex_encoding( 'UTF-8');  
ini_set('default_charset','utf-8');

echo ("Текст: ". $_POST['text1']);
echo ' <br/>';
$split=preg_split('//u', $_POST['text1'], null, PREG_SPLIT_NO_EMPTY);

$ga = 0;
$go = 0;
$gy = 0;
$geq = 0;
$gs = 0;
$gya = 0;
$ge = 0;
$gee = 0;
$gyy = 0;
$gi = 0;
foreach ($split as $k => $v) {
            if ($v == "а" || $v == "А") {
				$ga = $ga + 1;
            }
            elseif ($v == "о" || $v == "О"){
				$go = $go + 1;
            }
			elseif ($v == "у" || $v == "У"){
				$gy = $gy + 1;
            }
			elseif ($v == "э" || $v == "Э"){
				$geq = $geq + 1;
            }
			elseif ($v == "ы" || $v == "Ы"){
				$gs = $gs + 1;
            }
			elseif ($v == "я" || $v == "Я"){
				$gya = $gya + 1;
            }
			elseif ($v == "е" || $v == "Е"){
				$ge = $ge + 1;
            }
			elseif ($v == "ё" || $v == "Ё"){
				$gee = $gee + 1;
            }
			elseif ($v == "ю" || $v == "Ю"){
				$gyy = $gyy + 1;
            }
			elseif ($v == "и" || $v == "И"){
				$gi = $gi + 1;
            }
        }
print "Количесиво гласных 'а' - $ga<br>";
print "Количесиво гласных 'о' - $go<br>";
print "Количесиво гласных 'у' - $gy<br>";
print "Количесиво гласных 'э' - $geq<br>";
print "Количесиво гласных 'ы' - $gs<br>";
print "Количесиво гласных 'я' - $gya<br>";
print "Количесиво гласных 'е' - $ge<br>";
print "Количесиво гласных 'ё' - $gee<br>";
print "Количесиво гласных 'ю' - $gyy<br>";
print "Количесиво гласных 'и' - $gi<br>";

