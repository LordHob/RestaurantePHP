<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("DELETE FROM ingrediente WHERE nombre= '$_POST[nombre]'");
header('Location: http://localhost/dev/EquipoRest/pages/Ingrediente/listaingredientes.php');
