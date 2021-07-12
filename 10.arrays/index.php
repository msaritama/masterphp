<?php
/* --------------------------------- Arrays --------------------------------- */
$pelicula="Batman";
$peliculas=array('Batman','Spiderman','Terminator');
$cantantes=['Juanes','Shakira','Drake'];

/* --------------------------- Arryas asociativos --------------------------- */
$personas=array(
    'nombre'=>'Miguel',
    'apellido'=>'Saritama',
    'telefono'=>'098751703'
);
var_dump($personas);
echo $personas['nombre'];
echo '<br';

/* -------------------------------------------------------------------------- */
/*                          Arrays multidimensionales                         */
/* -------------------------------------------------------------------------- */

$contactos=array(
    array(
        'nombre'=>'Esteban',
        'apellido'=>'Saritama',
        'telefono'=>'098751703',
    ),
    array(
        'nombre'=>'Miguel',
        'apellido'=>'Saritama',
        'telefono'=>'098751703',
    )
    );
    echo '<br';
    var_dump($contactos);
/* -------------------------------------------------------------------------- */
/*                           Recorrer arrays con for                          */
/* -------------------------------------------------------------------------- */
echo '<h1>Array con for</h1>';
echo '<ul>';
for ($i=0; $i < count($cantantes); $i++) { 
    echo "<li>$peliculas[$i]</li>";
}
echo '</ul>';


/* -------------------------------------------------------------------------- */
/*                         Recorrer arrays con foreach                        */
/* -------------------------------------------------------------------------- */
echo '<h1>Array con each</h1>';
echo '<ul>';
foreach ($cantantes as $key) {
    echo "<li>$key</li>";
}
echo '</ul>';


/* -------------------------------------------------------------------------- */
/*                             Funciones con array                            */
/* -------------------------------------------------------------------------- */

$nombres=['Miguel',1,'Roberto','Luis',5,3];
// asort: Ordenar alfabeticamente ascendente
asort($nombres);
echo '<br';
// arsort: Ordenar alfabeticamente descendente
arsort($nombres);
echo '<br';
//sort: ordenar cadenas y numeros
sort($nombres);
echo '<br';

//Agregar datos al array
$nombres[]='Juan';
array_push($nombres,'Johana');

//Eliminar datos del array del ultimo indice
array_pop($nombres);

//Eliminar datos del array del indice especfico
unset($nombres[2]);

//Obtener un dato aletorio
array_rand($nombres);

//Invertir array
array_reverse($nombres);

//Buscar datos dentro de un array
array_search('Miguel',$nombres);

//Contar numero de elementos de un array
count($nombres);
?>