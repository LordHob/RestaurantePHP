<h1> BORRAR INGREDIENTE </h1>
<link rel="stylesheet" type="text/css" href="../styles/formularios.css" />
<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
?>

<div classname="formulario">
    <form action="action_deleteingrediente.php" method="post">
        <p>Nombre del ingrediente: <input type="text" id="nombre" name="nombre" /></p>
        <p><input type="submit" value="Borrar ingrediente" class="button" /></p>
    </form>
</div>