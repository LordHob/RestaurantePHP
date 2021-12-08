<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("UPDATE ingrediente set nombre='$_POST[newnombre]' WHERE nombre='$_POST[nombre]'");
$resultadodos = $mysqli->query("UPDATE ingrediente set cantidad='$_POST[newcantidad]' WHERE cantidad='$_POST[cantidad]'");
header('Location: https://restaurante-php-equipo.herokuapp.com/pages/Ingrediente/listaingredientes.php');
?>