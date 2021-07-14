<?php
$archivo=$_FILES['archivo'];
$nombre=$archivo['name'];
$tipo=$archivo['type'];
if ($tipo=='image/jpg' || $tipo=='image/jpeg' || $tipo=='image/png') {
    if (!is_dir('images')) {
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    header("Refresh: 5;url=index.php");
    echo '<h2>Se subio imagen correctamente</h2>';
}else {
    header("Refresh: 5;url=index.php");
    echo '<h2>Imagen no permitida</h2>';
}

die();
?>