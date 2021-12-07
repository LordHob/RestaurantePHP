<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();

//HAGO CONSULTA A BASE DE DATOS PARA BUSCAR EL USUARIO LOGADO CON CORREO Y CONTRASEÑA
$resultado = $mysqli->query("SELECT * FROM user WHERE (nombre ='" . $_POST["nombre"] . "' AND email ='" . $_POST["email"] . "' AND contraseña = '" . $_POST["contraseña"] . "')");

//GUARDO RESULTADO DE LA CONSULTA EN VARIABLE USUARIO
$usuario = $resultado->fetch_all();
?>