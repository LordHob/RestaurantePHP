<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();

//Consulta a la BD para buscar usuario logado con su contraseña y password
$resultado = $mysqli->query("SELECT * FROM user WHERE (nombre ='" . $_POST["nombre"] . "' AND email ='" . $_POST["email"] . "' AND contraseña = '" . $_POST["contraseña"] . "')");

//Se guarda el resultado de esta consulta en la variable usuario
$usuario = $resultado->fetch_all();
?>