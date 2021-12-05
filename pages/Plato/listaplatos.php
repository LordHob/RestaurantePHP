<h1> LISTA DE PLATOS</h1>

<?php

//conexión la base de datos
require '../../db/db_connect.php';
$mysqli = conectar();

//Consulta BBDD
$resultado = $mysqli->query("SELECT id, titulo FROM plato");

//Imprime resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/detalle_plato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>';
    echo '</li>';
}
echo '</ol>';
// Añadimos el botón hacia la pantalla de nuevo plato
echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/form_plato.html">
<button>Añadir plato</button>
</a>';


?>