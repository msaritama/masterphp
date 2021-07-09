<?php
/* -------------------------------------------------------------------------- */
/*                                 Ejercicio1                                 */
/* -------------------------------------------------------------------------- */
/* ------------- Todos los numeros impares entre dos numeros Get ------------ */

if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    if ($a < $b) {
        for ($i = $a + 1; $i <= $b; $i++) {
            if ($i%2!=0) {
                echo "$i<br>";
            }
        }
    }else{
        echo 'Ingrese correctamente los numeros';
    }
}
?>
