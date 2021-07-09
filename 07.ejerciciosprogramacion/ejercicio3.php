<?php
/* -------------------------------------------------------------------------- */
/*                                 Ejercicio1                                 */
/* -------------------------------------------------------------------------- */
/* ------------- 3. Mostrar todos los numeros entre dos numeros ------------- */
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    if ($a < $b) {
        for ($i = $a + 1; $i <= $b; $i++) {
            echo "$i<br>";
        }
    }else{
        echo 'Ingrese correctamente los numeros';
    }
}
