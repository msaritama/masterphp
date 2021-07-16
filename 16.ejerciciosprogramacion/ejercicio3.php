
<?php 
if (isset($_POST['n1'])&&isset($_POST['n2'])) {
    $resultado=false;
    if(isset($_POST['sumar']))
    $resultado='El resultado es: '.($_POST['n1']+$_POST['n1']);
    if(isset($_POST['restar']))
    $resultado='El resultado es: '.($_POST['n1']-$_POST['n1']);
    if(isset($_POST['multiplicar']))
    $resultado='El resultado es: '.($_POST['n1']*$_POST['n1']);
    if(isset($_POST['dividor']))
    $resultado='El resultado es: '.($_POST['n1']/$_POST['n1']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Calculadora</h1>   
     <form action="#" method="POST">
         <label for="n1">Numero 1</label>
         <input type="number" name="n1">
         <label for="n2">Numero 2</label>
         <input type="number" name="n2">
         <input type="submit" value="Sumar" name="sumar">
         <input type="submit" value="Restar" name="restar">
         <input type="submit" value="Multiplicar" name="multiplicar">
         <input type="submit" value="Dividir" name="dividir">
     </form>
     <?php 
if ($resultado!=false){
    echo 'El resultado es: '.$resultado;
}
?>
</body>
</html>
