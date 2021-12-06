<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("DELETE FROM plato WHERE titulo= '$_POST[titulo]'");
header('Location: http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php');
?>