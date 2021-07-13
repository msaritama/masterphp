<?php
/* ---------------------------- Crear directorio ---------------------------- */
if(!is_dir('mi_carpeta'))
    mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
else {
    echo 'Ya existe la carpeta<br>';
}

/* ---------------------------- Eliminar carpeta ---------------------------- */
//rmdir('mi_carpeta');

/* ----------------------- Recorrer todo el directorio ---------------------- */

if($gestor=opendir('./mi_carpeta')){
    while(false!=($archivo=readdir($gestor))){
        if($archivo!='.' && $archivo!='..'){
            echo $archivo.'<br>';
        }
    }
}


