<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("UPDATE plato set titulo='$_POST[newtitulo]' WHERE titulo='$_POST[titulo]'");
$resultadodos=$mysqli->query("UPDATE plato set comensales='$_POST[newcomensales]' WHERE comensales='$_POST[comensales]'");
$resultadotres=$mysqli->query("UPDATE plato set tipo='$_POST[newtipo]' WHERE tipo='$_POST[tipo]'");
header('Location: https://restaurante-php-equipo.herokuapp.com/pages/Plato/listaplatos.php');
?>