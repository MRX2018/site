<?php
$N=$_POST["n"];
$mod=2;
$check = 0;
function is_prime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
if (is_numeric($N) and $N>1) {

	switch ($_POST["select"]) {
	
	case 1:
	for ($i=1; $i<=$N; $i++) {
		if ($i%$mod==0) { echo ($i . "\t"); }
	}
	break;
	
	case 2:
	for ($i=1; $i<=$N; $i++) {
		if ($i%$mod==1) { echo ($i . "\t"); }
	}
	break;
	
	case 3:
	
	for ($i=2; $i<=$N; $i++) {
		if (is_prime($i)) {
		echo ($i. "\t");	
		}
	}
	
	break;
	
	case 4:
	
	for ($i=2; $i<=$N; $i++) {
		if ((is_prime($i))==false) {
			echo ($i . "\t");	
		}
	}
	
	break;
	} 
}
else {echo ("<p>". "Неверный ввод! Попробуйте еще раз!");}
?>

