<?php
/* -------------------------------------------------------------------------- */
/*                                 Ejercicio1                                 */
/* -------------------------------------------------------------------------- */
/* ------------ 4. Imprimir todas las tablas del 1 al 10 en html ------------ */
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
    <h1>Tablas de multiplicar</h1>
    <?php
    for ($x = 0; $x <= 10; $x++) {
    ?>
        <h2>Tabla del <?php echo $x?></h2>
        <table class="table table-striped table-inverse table-responsive">
            <tbody>
                <?php
                for ($y = 0; $y <=10; $y++) {
                    echo "<tr>
                        <td>$x</td>
                        <td>x</td>
                        <td>$y</td>
                        <td>=</td>
                        <td>".$x*$y."</td>
                        </tr>";
                } ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</body>

</html>