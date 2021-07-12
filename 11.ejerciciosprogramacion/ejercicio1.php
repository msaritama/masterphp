<?php
/* 
Array con 8 numeros enteros y hacer:
a.Recorrer y mostrar
b.Ordenar y mostrar
c.Mostrar longitud
d.Buscar dato dentro del array 
*/

// Literal a
$numeros=[2,12,20,1,5,35,14,8];
echo imprimirArray($numeros).'<br>';

// Literal b
sort($numeros);
echo imprimirArray($numeros).'<br>';

// Literal c
echo count($numeros).'<br>';

// Literal d
$buscar=5;
echo array_search($buscar,$numeros);

function imprimirArray($array)
{
    $data='';
    foreach ($array as $valor) {
        $data.=$valor.' ';
    }     
    return $data;
}

?>