<?php 
/* Funcion de validar un email con filter_var
Validar un email con filter_var
mostrar el resultado */

function validarEmail($email){
    $status='No valido';
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status='valido';
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo 'No existe un parametro';
}
?>