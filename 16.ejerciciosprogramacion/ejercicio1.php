<?php 
// Crear una sesion  que aumente su valor en 1 o dismuya en 1 en funcion al parametro get coubter uno o a cero.
session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero']=0;
}
if(isset($_GET['counter'])&& $_GET['counter']==1){
    $_SESSION['numero']++;
}
if(isset($_GET['counter'])&& $_GET['counter']==0){
    $_SESSION['numero']--;
}


?>
<h1>el valor de la sesion numero es: <?= $_SESSION['numero'] ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>