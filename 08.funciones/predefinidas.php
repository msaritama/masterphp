<?php
/* -------------------------------------------------------------------------- */
/*                           Funciones predefinidas                           */
/* -------------------------------------------------------------------------- */
/* -------------------------------- Debugear -------------------------------- */
$data=15.5;
var_dump($data);

/* --------------------------------- Fechas --------------------------------- */
echo date('d-m-y');
echo '<br>';

/* --------------------------------- Tiempo --------------------------------- */
echo time();
echo '<br>';

/* ------------------------------- Matematicas ------------------------------ */
$numero=9.85;
echo "Raiz cuadrada de $numero es:".sqrt($numero);
echo '<br>';
echo "Numero aleatorio entre 0 y $numero:".rand(0,$numero);
echo '<br>';
echo "Numero PI:".pi();
echo '<br>';
echo "El redondeado hacia arriba de $numero es:".round($numero,2);
echo '<br>';
echo "El redondeado hacia arriba de $numero es:".round($numero,0,PHP_ROUND_HALF_UP);
echo '<br>';
echo "El redondeado hacia arriba de $numero es:".round($numero,0,PHP_ROUND_HALF_DOWN);

/* -------------------------------------------------------------------------- */
/*                             Funciones Generales                            */
/* -------------------------------------------------------------------------- */
/* ---------------------------------- Tipo ---------------------------------- */
echo '<br>';
$data='Miguel';
echo gettype($data);

if(is_numeric($data ))
    echo '<br>Es un numero';
else
    echo '<br>No Es un numero<br>';

// Eliminar espacios
$frase='<br>   Mi frase es        con espacios     ';
var_dump(trim($frase));

// Eliminar variables
$year=2020;
unset($year);

// Verificar si esta vacio
$texto=false;
if(empty($texto))
    echo '<br>Variable vacia';
else
    echo '<br>Variable tiene contenido';

//Contar caracteres de un string
$nombre='Miguel Saritama';
echo strlen($nombre);

//Encontrar caracteres
$frase='La vida es bella sin mentiras';
echo strpos($frase,'i');

//Reemplazar palabras/caracteres
$frase=str_replace('vida','moto',$frase);
echo "<br>$frase";
?>