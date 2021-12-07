<h1> REGISTRO </h1>
<link rel="stylesheet" type="text/css" href="../../styles/formularios.css" />

<!-- <?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
?> -->

<div class="formulario">
    <form action="action_register.php" method="post">
        <div class="form-element">
            <label>Nombre</label>
            <input type="text" class="nombre" name="nombre" id="nombre" />
        </div>
        <div class="form-element">
            <label>Email</label>
            <input type="email" name="email" id="email" class="email" />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="contraseña" id="contraseña" class="contraseña" />
        </div>
        <button type="submit" name="register" value="register">Register</button>
    </form>
</div>