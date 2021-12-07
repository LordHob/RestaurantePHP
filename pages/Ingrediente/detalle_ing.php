<?php

echo '<h1>Detalle de ' . ($_GET["nombre"]) . '</h1>';

require '../../db/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM ingrediente WHERE id=" . $_GET["id"]);
$reg = $resultado->fetch_assoc();

//Mostramos los datos

echo '<ul>';
echo '<li>Identificador: ' . $reg['id'] . '</li>';
echo '<li>Nombre del ingrediente: ' . $reg['nombre'] . '</li>';
echo '<li>Cantidad ' . $reg['cantidad'] . '</li>';
echo '</ul>';


?>

<div classname="formulario">
    <form novalidate action="action_putingrediente.php" method="post">
        <p>Nombre del ingrediente a actualizar: <input type="nombre" id="nombre" name="nombre" /></p>
        <p>Nuevo nombre del ingrediente: <input type="newnombre" id="newnombre" name="newnombre" /></p>
        <p>Número de cantidad a actualizar: <input type="cantidad" id="cantidad" name="cantidad" /></p>
        <p>Nuevo número de cantidad: <input type="newcantidad" id="newcantidad" name="newcantidad" /></p> </select></p>
        <p><input type="submit" value="Actualizar plato" class="button" /></p>
    </form>
</div>

<?php


// Añado botón para volver a index

echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php">
<button type="button">Volver</button>
</a>';
?>