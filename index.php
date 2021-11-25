<h1> RESTAURANTE PHP</h1>

<?php

//conexión la base de datos
require './database/db_conect.php';
$mysqli = conectar();

// Añadimos el botón hacia la pantalla de nuevo plato
echo '<a href="http://localhost/dev/EquipoRest/listaplatos.html">
<button>Añadir plato</button>
</a>';


?>