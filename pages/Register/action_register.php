<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO user (nombre, email, contraseña, rol) VALUES ('".$_POST['nombre'] ."', '".$_POST['email']."', '".$_POST['contraseña']."', 'usuario')");
header('Location: http://localhost/dev/EquipoRest/index.php');
?>