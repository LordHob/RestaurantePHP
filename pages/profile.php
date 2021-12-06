<h1> PERFIL USUARIO </h1>

<?php

//conexión la base de datos
require '../db/db_connect.php';
$mysqli = conectar();

//Consulta BBDD
$resultado = $mysqli->query("SELECT * FROM user WHERE id=" .$_GET["id"] .$_GET["nombre"] .$_GET["email"]);
$reg=$resultado->fetch_assoc();

//Imprime resultado
echo '<ul>';
echo '<li>ID Usuario: '.$reg['id'].'</li>';
echo '<li>Nombre Usuario: '.$reg['nombre'].'</li>';
echo '<li>Email Usuario: '.$reg['email'].'</li>';
echo '</ul>';
// Añadimos el botón hacia la pantalla de nuevo plato
echo '<a href="http://localhost/dev/EquipoRest/pages/form_plato.html">
<button>Añadir plato</button>
</a>';


?>