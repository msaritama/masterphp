<?php
/* -------------------------------------------------------------------------- */
/*                                 Ejercicio1                                 */
/* -------------------------------------------------------------------------- */
/* ----------- 2. Recoger dos numeros por get y hacer operaciones ----------- */

if(isset($_GET['a']) && isset($_GET['b'])){
    $a=$_GET['a'];
    $b=$_GET['b'];
    echo '<br>Suma: '.($a+$b);
    echo '<br>Resta: '.($a-$b);
    echo '<br>Multiplicacion: '.($a*$b);
    echo '<br>Division: '.($a/$b);

}else{
    echo'<br>Faltan valores';
}




?>