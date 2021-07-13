<?php
$error = 'Faltan valores';
if (
    !empty($_POST['nombre']) && !empty($_POST['apellido'])
    && !empty($_POST['edad']) && !empty($_POST['email'])
    && !empty($_POST['password'])
) {
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    /* ----------------------------- Validar Nombre ----------------------------- */
    if (!is_string($nombre) || preg_match('/[0-9]+/',$nombre)) {
        $error = 'nombre';
        echo "Error con el nombre<br>";
    }
    if (!is_string($apellido) || preg_match('/[0-9]+/',$apellido)) {
        $error = 'apellido';
        echo "Error con el apellido<br>";
    }
    if (!is_numeric($edad) || filter_var($edad,FILTER_VALIDATE_INT)) {
        $error = 'edad';
        echo "Error con el edad<br>";
    }
    if (!is_string($email) || filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
        echo "Error con el email<br>";
    }
    if (strlen($password) <5 || filter_var($password,FILTER_VALIDATE_EMAIL)) {
        $error = 'password';
        echo "Error con el password<br>";
    }

} else {
    header("Location:formulario.php?error=$error");
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
    <?php if ($error == 'ok') : ?>
        <p><?= $nombre ?></p>
        <p><?= $apellido ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>
        <p><?= $password ?></p>
    <?php endif ?>

</body>

</html>