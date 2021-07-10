<?php
/* -------------------------------------------------------------------------- */
/*                                  Funciones                                 */
/* -------------------------------------------------------------------------- */
/* Una funciones es un conjunto de instrucciones agrupadas bajo un nombre
concret y que pueden reutilizarse solamente invocando a la funcion tantas veces
como se quiera 
*/
/* -------------------------------- Ejemplo 1 ------------------------------- */
function muestraNombres()
{
    echo 'Miguel<br>';
    echo 'Jose<br>';
}
muestraNombres();

/* -------------------------------- Ejemplo 2 ------------------------------- */
/* -------------------------- Funcion con parametro ------------------------- */
function tabla($numero)
{
    echo "<h1>Tabla de multiplicar del $numero</h1>";
    for ($i=0; $i <=10 ; $i++) { 
        $operacion=$numero+$i;
        echo "$numero x $i = $operacion<br>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
}else {
   echo 'No hay numeros';
}

/* -------------------------------- Ejemplo 3 ------------------------------- */
/* ------------------------ Funciones con parametros ------------------------ */
function calculadora($numero1, $numero2)
{
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo "Suma: $suma<br>";
    echo "Resta: $resta<br>";
    echo "Multiplicacion: $multiplicacion<br>";
    echo "Division: $division<br>";
}
calculadora(9,3);

/* -------------------------------- Ejemplo 3 ------------------------------- */
/* ------------------- Funciones con parametros opcionales ------------------ */
function calculadoraOpc($numero1, $numero2,$opc=false)
{
    if ($opc) {
        echo '<h1>Calculadora</h1>';
    }
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo "Suma: $suma<br>";
    echo "Resta: $resta<br>";
    echo "Multiplicacion: $multiplicacion<br>";
    echo "Division: $division<br>";
}
calculadoraOpc(9,3,true);

/* -------------------------------- Ejemplo 4 ------------------------------- */
/* -------------------------- Funciones con retorno ------------------------- */

function calculadoraRetorno($numero1, $numero2,$opc=null)
{
    $data='';
    if (!empty($opc)) {
        echo "<h1>Operaciones entre $numero1 y $numero2</h1>";
    }
    $suma= $numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    $data.="Suma: $suma<br>";
    $data.="Resta: $resta<br>";
    $data.="Multiplicación: $multiplicacion<br>";
    $data.="División: $division<br>";
    return $data;
}
echo calculadoraRetorno(10,3,2);

/* -------------------------------- Ejemplo 5 ------------------------------- */
/* ------------------------ Funciones dentro de otras ----------------------- */

function getNombre($nombre)
{
    $texto="Su nombre es $nombre";
    return $texto;
}

function getApellido($apellido)
{
    $texto="Y su apellido es $apellido";
    return $texto;
}

function devuelveNombre($nombres,$apellidos)
{
    $texto=getNombre($nombres).'<br>';
    $texto.=getApellido($apellidos);
    return $texto;
}

echo devuelveNombre('Miguel','Saritama');

/* -------------------------------------------------------------------------- */
/*                              Variables locales                             */
/* -------------------------------------------------------------------------- */
/* Son las que se definen dentro de una funcion y no pueden ser usadas
fuera de la funcion, solo estan disponibles dentro a no ser que se haga
uso de un return */


/* -------------------------------------------------------------------------- */
/*                             Variables globales                             */
/* -------------------------------------------------------------------------- */
/* Se declaran fuera de una funcion y estan disponibles dentro y fuera
de las funciones */

$frase='Variables sobre funciones';
//echo $frase;

function imprimir()
{
    global $frase;
    echo "$frase";
}
//imprimir();

/* -------------------------------------------------------------------------- */
/*                             Funciones variables                            */
/* -------------------------------------------------------------------------- */

function buenosDias(){
    return "Hola Buenos dias";
}

function buenosTardes(){
    return "Hey Buenos tardes";
}

function buenosNoches(){
    return "Hora de dormir? Buenas noches";
}

$horario="Noches";
$miFuncion="buenos".$horario;
echo $miFuncion();

?>