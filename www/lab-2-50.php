<p>Лапшин Дмитрий Александрович
<p>

<?php
print ('<br>');
print ("Лабараторная работа №2 / Вариант 4 и 8".'<br>');
$a=rand(-10,10);
$b=rand(-10,10);
echo ("a = " .$a ." , b = " .$b);

function firstF ($u, $t) {

$summ = $u;
return $summ;
}

function secondF ($u, $t) {

$summ = $t;
return $summ;
}

function thirdF ($u, $t) {

$summ = $u-2*$t;
return $summ;
}
function fourthF ($u, $t) {

$summ = $t*$u+3*$t;
return $summ;
}
?>

<p> Найдем значение выражения: z=f(a-b^2,b-a)+f(a,b-a^2) </p>
<p> При условии:
<p> f(u,t) = <p>
<p> u, u>=0, t>=0; <p>
<p> t, u<0, t>=0; <p>
<p> u-2*t, u>=0, t<0; <p>
<p> u*t+3*t, u<0, t<0; <p>



<p>
<?php
$z=0;

if ($a>=0 and $b>=0) {
$z+=firstF($a-$b*$b,($b-$a));
}
else if ($a<0 and $b>=0) {
$z+=secondF($a-$b*$b,($b-$a));
}
else if ($a>=0 and $b<0) {
$z+=thirdF($a-$b*$b,($b-$a));
}
else if ($a<0 and $b<0) {
$z+=fourthF($a-$b*$b,($b-$a));
}
echo "1) = ".$z;
?>

<p>
<?php

$x = 0;

if ($a>=0 and $b>=0) {
$x+=firstF($a,($b-$a*$a));
}
else if ($a<0 and $b>=0) {
$x+=secondF($a,($b-$a*$a));
}
else if ($a>=0 and $b<0) {
$x+=thirdF($a,($b-$a*$a));
}
else if ($a<0 and $b<0) {
$x+=fourthF($a,($b-$a*$a));
}
echo "2) = ".$x;
$z+=$x;
?>

<p>


<?php
echo ("Итоговое значение: (1)+(2)= ".$z);
$summ=0;
?>
<?php
print ('<br>');
print ("Вариант 8".'<br>');
$a=rand(-10,10);
$b=rand(-10,10);
echo ("a = " .$a ." , b = " .$b);

function firstF1 ($u, $t) {

$summ = ($u/$t)+$t*$t;
return $summ;
}

function secondF1 ($u, $t) {

$summ = $u+($t*$t)/$u;
return $summ;
}

function thirdF1 ($u, $t) {

$summ = $u-$t;
return $summ;
}
function fourthF1 ($u, $t) {

$summ = ($t+3*$u)/(u*t);
return $summ;
}
?>

<p> Найдем значение выражения: z=f(a+1/b,b^8/a^6)+f(a^3/4+b^5/6,b-a) </p>
<p> При условии:
<p> f(u,t) = <p>
<p> u/t+t^2, u>=0, t>=0; <p>
<p> u+t^2/u, u<0, t>=0; <p>
<p> u-t, u>=0, t<0; <p>
<p> t+3*u/u*t, u<0, t<0; <p>



<p>
<?php
$z=0;

if ($a>=0 and $b>=0) {
$z+=firstF1($a+1/$b,(($b*$b*$b*$b*$b*$b*$b*$b)/($a*$a*$a*$a*$a*$a)));
}
else if ($a<0 and $b>=0) {
$z+=secondF1($a+1/$b,(($b*$b*$b*$b*$b*$b*$b*$b)/($a*$a*$a*$a*$a*$a)));
}
else if ($a>=0 and $b<0) {
$z+=thirdF1($a+1/$b,(($b*$b*$b*$b*$b*$b*$b*$b)/($a*$a*$a*$a*$a*$a)));
}
else if ($a<0 and $b<0) {
$z+=fourthF1($a+1/$b,(($b*$b*$b*$b*$b*$b*$b*$b)/($a*$a*$a*$a*$a*$a)));
}
echo "1) = ".$z;
?>

<p>
<?php

$x = 0;

if ($a>=0 and $b>=0) {
$x+=firstF1((pow($a, 3/4)+pow($b, 5/6)),$b-$a);
}
else if ($a<0 and $b>=0) {
$x+=secondF1((pow($a, 3/4)+pow($b, 5/6)),$b-$a);
}
else if ($a>=0 and $b<0) {
$x+=thirdF1((pow($a, 3/4)+pow($b, 5/6)),$b-$a);
}
else if ($a<0 and $b<0) {
$x+=fourthF1((pow($a, 3/4)+pow($b, 5/6)),$b-$a);
}
echo "2) = ".$x;
$z+=$x;
?>

<p>


<?php
echo ("Итоговое значение: (1)+(2)= ".$z);

?>