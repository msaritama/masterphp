<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
    if (isset($_GET['error'])) {
        $error=$_GET['error'];
        echo "<p style='color:red'>Introduce todos los datos</p>";
    } 
    ?>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" pattern="[a-zA-Z]+" required><br>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" pattern="[a-zA-Z]+" required><br>
        <label for="edad">Edad</label><br>
        <input type="number" name="edad" required pattern="[0-9]+"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" required><br>
        <label for="password">Contrasena</label><br>
        <input type="password" name="password" minlength="5" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>