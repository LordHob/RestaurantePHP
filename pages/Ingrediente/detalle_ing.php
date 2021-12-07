<?php

echo '<h1>Detalle de ' . ($_GET["nombre"]) . '</h1>';

require '../../db/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM ingrediente WHERE id=" .$_GET["id"]);
$reg=$resultado->fetch_assoc();

//Mostramos los datos

echo '<ul>';
echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre del ingrediente: '.$reg['nombre'].'</li>';
echo '<li>Cantidad '.$reg['cantidad'].'</li>';
echo '</ul>';

// Añado botón para volver a index

echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php">
<button type="button">Volver</button>
</a>';