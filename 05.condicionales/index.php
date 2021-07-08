<?php
/* -------------------------------------------------------------------------- */
/*                          Operadores de comparacion                         */
/* -------------------------------------------------------------------------- */
/* 
==  igual
=== identico(tipo de dato)
!=  distinto
<>  diferente
!== no identico
<   menor que
>   mayor que 
<   menor o igual que
>   mayor o igual que 
*/
/* -------------------------------------------------------------------------- */
/*                             Operadores Logicos                             */
/* -------------------------------------------------------------------------- */
/* &&  AND
||  OR
!   NOT */

/* -------------------------------- Ejemplo 1 ------------------------------- */
$color = 'rojo';
if ($color == 'rojo') {
    echo 'El color es rojo';
} else
    echo 'El color no es rojo';

/* -------------------------------- Ejemplo 2 ------------------------------- */
$year = 2019;
if ($year == 2019) {
    echo '<br>Estamos en 2019';
} else
    echo '<br>No estamos en 2019';

/* -------------------------------- Ejemplo 3 ------------------------------- */
$mayor_edad = 18;
$nombre = 'Miguel';
$edad = 35;

if ($edad >= 18) {
    echo "<br>$nombre Es mayor de edad";
} else {
    echo "<br>$nombre No es mayor de edad";
}

/* -------------------------------- Ejemplo 4 ------------------------------- */

$dia = 3;
if ($dia == 1) {
    echo '<br>Es lunes';
} elseif ($dia == 2) {
    echo '<br>Es martes';
} else
    echo '<br>Otro dia';

/* -------------------------------- Ejemplo 5 ------------------------------- */

$edada = 18;
$edadb = 64;
$edad = 16;

if ($edad >= $edada && $edad <= $edadb) {
    echo '<br> Edad de trabajar';
} else {
    echo '<br> Edad de NO trabajar';
}

/* -------------------------------------------------------------------------- */
/*                                  Ejemplo 6                                 */
/* -------------------------------------------------------------------------- */

$dia = 4;
switch ($dia) {
    case 1:
        echo '<br>Lunes';
        break;
    case 2:
        echo '<br>Martes';
        break;
    case 3:
        echo '<br>Miercoles';
        break;
    case 4:
        echo '<br>Jueves';
        break;
    case 5:
        echo '<br>Viernes';
        break;
    default:
        echo '<br>Fin de semana';
        break;
}

/* -------------------------------------------------------------------------- */
/*                                  Ejemplo 7                                 */
/* -------------------------------------------------------------------------- */
/* --------------------- No ejecuta las lineas de codigo -------------------- */

goto marca;
echo '<h1>Instruccion 1</h1>';
echo '<h1>Instruccion 2</h1>';
echo '<h1>Instruccion 3</h1>';
echo '<h1>Instruccion 4</h1>';

marca:
echo '<br>Me ha saltado 4 echos';