<?php

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

require '../db/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato WHERE id=" .$_GET["id"]);
$reg=$resultado->fetch_assoc();

//Mostramos los datos

echo '<ul>';
echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre del plato: '.$reg['titulo'].'</li>';
echo '<li>Numero de comensales '.$reg['comensales'].'</li>';
echo '<li>Tipo de plato: '.$reg['tipo'].'</li>';
echo '</ul>';

// Añado botón para volver a index

echo '<a href="http://localhost/dev/EquipoRest/pages/listaplatos.php">
<button type="button">Volver</button>
</a>';
