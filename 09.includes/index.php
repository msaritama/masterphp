/* -------------------------------------------------------------------------- */
/*                                   INCLUDE                                  */
/* -------------------------------------------------------------------------- */
Esta función inserta código en nuestro archivo desde otro archivo, 
Si el archivo declarado no existe y/o tuviera alguna falla en su interior. 
PHP nos mostrar un mensaje tipo ‘warning‘ y nuestro código seguirá compilando.
<?php include 'includes/cabecera.php'; ?>
<?php include_once 'includes/cabecera.php'; ?>
<div>
    <h2>Esta es la pagina de Inicio</h2>
    <p>Texto de prueba de inicio</p>
</div>
<?php include 'includes/footer.php'; ?>

REQUIRE, Realiza lo mismo que la anterior función. 
Sin embargo, si hay algún error en el código y/o no existiera nos mostrará un ‘fatal error‘ y 
nuestro fichero dejara de compilar y se detendrá.

</body>
</html>