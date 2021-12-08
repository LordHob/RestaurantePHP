<?php
include '../../template/header.php';
?>

<h1> LISTA DE INGREDIENTES</h1>

<?php

//conexión la base de datos
require '../../db/db_connect.php';
$mysqli = conectar();



//Consulta BBDD
$resultado = $mysqli->query("SELECT id, nombre FROM ingrediente");

//Imprime resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="https://restaurante-php-equipo.herokuapp.com/pages/Ingrediente/detalle_ing.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '">' . $reg['nombre'] . '</a>';
    echo '</li>';
}
echo '</ol>';
// Añadimos el botón hacia la pantalla de nuevo plato
echo '<a href="https://restaurante-php-equipo.herokuapp.com/pages/Ingrediente/añadir_ingrediente.php">
<button>Añadir un ingrediente</button>
</a>';


// Añado botón para ir a borrar un plato
echo '<a href="https://restaurante-php-equipo.herokuapp.com/pages/Ingrediente/delete_ingrediente.php">
<button type="button">Borrar ingrediente</button>
</a>';
?>