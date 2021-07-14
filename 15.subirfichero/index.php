<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="" alt="" srcset="" width="100px">
    <h1>Subir ficheros</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <input type="submit" value="Enviar">
    </form>
    <h1>Listado de imagenes</h1>
    <?php
     if ($gestor = opendir('./images')) {
        while (false !== ($imagen = readdir($gestor))) {    
            if ($imagen != "." && $imagen != "..") {    
                echo "<img src='images/$imagen' width='100px'> ";
            }
        }    
        closedir($gestor);
    }
    ?>
</body>

</html>