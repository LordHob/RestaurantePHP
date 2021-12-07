<h1> BORRAR PLATO </h1>
<link rel="stylesheet" type="text/css" href="../styles/formularios.css" />
<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
?>

<div classname="formulario">
    <form action="action_deleteplato.php" method="post">
        <p>Nombre del plato: <input type="text" id="titulo" name="titulo" /></p>
        <p><input type="submit" value="Borrar plato" class="button" /></p>
    </form>
</div>