<h3>Operadores aritméticos</h3>
<?php
$a = 8;
$b = 3;

echo $a + $b, "<br>"; 
echo $a - $b, "<br>"; 

$a++;
echo $a, "<br>";

$b--;
echo $b, "<br>";
?>

<h3>Operadores de comparación</h3>
<?php
$a = 8;
$b = 3;
$c = 3;

echo $a == $b, "<br>"; 
echo $a != $b, "<br>";
echo $a > $b, "<br>";
echo $a >= $b, "<br>";
echo $b <= $c, "<br>";
?>

<h3>Operadores lógicos</h3>
<?php
$a = 8;
$b = 3;
$c = 3;

echo ($a == $b) && ($c > $b), "<br>";
echo ($a == $b) || ($b == $c), "<br>";
echo ($b <= $c), "<br>";
?>
