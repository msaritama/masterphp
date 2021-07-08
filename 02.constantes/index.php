<?php
/* -------------------------------------------------------------------------- */
/*                                 Constantes                                 */
/* -------------------------------------------------------------------------- */
/* ----------- El un contenedor de informacion que no puede variar ---------- */
define('nombre','Miguel Saritama');
define('web','Master.ec');
$web='Masterweb.ec';
echo "<h1>".nombre.'</h1><br>';

/* -------------------------------------------------------------------------- */
/*                           Constantes predefinidas                          */
/* -------------------------------------------------------------------------- */
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';
function definir(){
    echo __FUNCTION__;
}
definir();


?>