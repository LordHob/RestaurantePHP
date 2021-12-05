<?php

include '../../template/header.php';
?>
<div class="container">
    <h1>LOGIN</h1>
    <form action="detalles_usuario.php" method="post">
        <fieldset>
            <div class="form-group">
                <label for="correo">Email:</label>
                <input type="email" class="form-control" id="correo-login" name="correo" placeholder="Correo">
            </div>
            <div class="form-group">
                <label for="contraseña">Password:</label>
                <input type="password" class="form-control" id="contraseña-login" name="contraseña" placeholder="Contraseña">
            </div>
            <input type="submit" class="next btn btn-info" value="ACCEDER">
        </fieldset>
    </form>
</div>
<?php
include '../../template/footer.php';

?>