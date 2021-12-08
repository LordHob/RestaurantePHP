<?php

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

require '../../db/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato WHERE id=" .$_GET["id"]);
$reg=$resultado->fetch_assoc();



//Mostramos los datos
echo '<ul>';
echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre del plato: '.$reg['titulo'].'</li>';
echo '<li>Numero de comensales '.$reg['comensales'].'</li>';
echo '<li>Tipo de plato: '.$reg['tipo'].'</li>';
echo '</ul>';

?>

<div classname="formulario">
    <form novalidate action="action_putplato.php" method="post">
        <p>Nombre del plato a actualizar: <input type="titulo" id="titulo" name="titulo" /></p>
        <p>Nuevo nombre del plato: <input type="newtitulo" id="newtitulo" name="newtitulo" /></p>
        <p>Número de comensales a actualizar: <input type="comensales" id="comensales" name="comensales" /></p>
        <p>Nuevo número de comensales: <input type="newcomensales" id="newcomensales" name="newcomensales" /></p>
        <p>Tipo plato a actualizar: <select type='tipo' id="tipo" name="tipo">
                <option value="Entrante">Entrante</option>
                <option value="Principal">Principal</option>
                <option value="Secundario">Secundario</option>
                <option value="Postre">Postre</option>
            </select></p>
            <p>Nuevo tipo de plato: <select type='newtipo' id="newtipo" name="newtipo">
                <option value="Entrante">Entrante</option>
                <option value="Principal">Principal</option>
                <option value="Secundario">Secundario</option>
                <option value="Postre">Postre</option>
            </select></p>
        <p><input type="submit" value="Actualizar plato" class="button" /></p>
    </form>
</div>

<?php
// Añado botón para volver a index

echo '<a href="https://restaurante-php-equipo.herokuapp.com/pages/Plato/listaplatos.php">
<button type="button">Volver</button>
</a>';

?>
