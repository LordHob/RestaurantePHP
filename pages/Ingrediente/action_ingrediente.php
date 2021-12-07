<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO ingrediente (nombre, cantidad) VALUES ('".$_REQUEST['nombre']."', '".$_REQUEST['cantidad']."')");
header('Location: http://localhost/dev/EquipoRest/pages/Ingrediente/listaingredientes.php');
