<?php
include '../../template/header.php';
?>

<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();

//Consulta a la BD para buscar usuario logado con su contraseña y password
$resultado = $mysqli->query("SELECT * FROM user WHERE (email = " . $_POST['email'] . "  , contraseña =  . $_POST[contraseña] . )");

//Se guarda el resultado de esta consulta en la variable usuario
$usuario = $resultado /*->fetch_all()*/;

//Pintamos los datos del usuario
echo '<div class="container">';
echo "<h1>Perfil de usuario de " . $_POST['nombre'] . "</h1>";
echo "<ul class='list-group'>";
echo "<li class='list-group-item'>Nombre del usuario: " . $_POST['nombre'] . "</li>";
echo "<li class='list-group-item'>Correo del usuario: " . $_POST['email'] . "</li>";
echo "<li class='list-group-item'>Contraseña del usuario: " . $_POST['contraseña'] . "</li>";
echo "</ul>";
echo '</div>';
?>

<?php
// include '../../template/footer.php';
?>