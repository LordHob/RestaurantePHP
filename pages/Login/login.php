<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();

include '../../template/header.php';
?>

<div class="container">
    <h1>LOGIN</h1>
    <form action="detalles_usuario.php" method="post">
        <fieldset>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre-login" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="correo">Email:</label>
                <input type="email" class="form-control" id="email-login" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="contraseña">Password:</label>
                <input type="password" class="form-control" id="password-login" name="contraseña" placeholder="Password">
            </div>
            <input type="submit" class="next btn btn-info" value="ACCEDER">
        </fieldset>
    </form>
</div>
<?php
// include '../../template/footer.php';

?>