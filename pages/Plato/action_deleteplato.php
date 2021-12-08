<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("DELETE FROM plato WHERE titulo= '$_POST[titulo]'");
header('Location: https://restaurante-php-equipo.herokuapp.com/pages/Plato/listaplatos.php');
?>