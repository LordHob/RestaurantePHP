<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();

include '../../template/header.php';
?>
<div class="container">
    <h1> REGISTRO </h1>
    <form action="action_register.php" method="post">
        <fieldset>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Nombre" />
            </div>
            <div class="form-group">
                <label for="correo">Email:</label>
                <input type="email" class="form-control" name="email" id="email" class="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <label for="contraseña">Password:</label>
                <input type="contraseña" name="contraseña" id="contraseña" class="form-control" placeholder="Password" />
            </div>
            <button type="submit" class="next btn btn-info" name="register" value="register">REGISTRARSE</button>
        </fieldset>
    </form>
</div>