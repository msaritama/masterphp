<?php
$a=2;
$b=4;
echo 'Suma: '.($a+$b).'<br>';
echo 'Resta: '.($a-$b).'<br>';
echo 'Multiplicacion: '.($a*$b).'<br>';
echo 'Division: '.($a/$b).'<br>';
echo 'Resto: '.($a%$b).'<br>';

/* -------------------------------------------------------------------------- */
/*                     Operadores incremento y decremento                     */
/* -------------------------------------------------------------------------- */

$year=2019;
echo "<h1>$year</h1>";
//Incremento
//$year=$year+1
$year++;
echo "<h1>$year</h1>";
//Decremento
//$year=$year-1
$year--;
echo "<h1>$year</h1>";
//Preincremento
//$year=1+$year
++$year;
echo "<h1>$year</h1>";
//Predecremento
//$year=1-$year
--$year;
echo "<h1>$year</h1>";


/* -------------------------------------------------------------------------- */
/*                          Operadores de asignacion                          */
/* -------------------------------------------------------------------------- */

$edad=55;
echo $edad.'<br>';

echo ($edad+=5).'<br>';
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';
echo ($edad/=5).'<br>';
?>