<h1> REGISTRO </h1>
<link rel="stylesheet" type="text/css" href="../styles/formularios.css" />

<?php

//Consulta y conexión a BBDD
require '../db/db_connect.php';
$mysqli = conectar();

//Consulta BBDD
$resultado = $mysqli->query("SELECT id, titulo FROM plato");


echo '<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>';