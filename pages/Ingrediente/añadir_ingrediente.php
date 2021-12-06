<h1> AÑADIR INGREDIENTE </h1>
<link rel="stylesheet" type="text/css" href="../styles/formularios.css" />
<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
?>

<div classname="formulario">
    <form novalidate action="action_ingrediente.php" method="post">
        <p>Nombre del ingrediente: <input type="nombre" id="nombre" name="nombre" /></p>
        <p>Cantidad: <input type="cantidad" id="cantidad" name="cantidad" /></p>
        <p><input type="submit" value="Añadir ingrediente" class="button" /></p>
    </form>
</div>