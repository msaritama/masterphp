<?php
$abrir_fichero=fopen('fichero.txt',"a+");

/* ----------------------------- Leer contenido ----------------------------- */
while(!feof($abrir_fichero)){
    $contenido=fgets($abrir_fichero);
    echo $contenido;
}

/* --------------------------- Escribir contenido --------------------------- */

fwrite($abrir_fichero,'Texto desde php');
fclose($abrir_fichero);

/* ----------------------------- Copiar fichero ----------------------------- */
copy('fichero.txt','fichero_copia.txt') or die('Error al copiar');

/* ---------------------------- Renombrar fichero --------------------------- */
rename('fichero_copia.txt','fichero_renombrado.txt');

/* ---------------------------- Eliminar fichero ---------------------------- */
unlink('fichero_renombrado.txt') or die('Error al borrar');

/* ----------------------- Comprobar si existe fichero ---------------------- */
if(file_exists('fichero_renombrado.txt'))
echo '<br>Si existe';
else
echo '<br>No existe';


?>