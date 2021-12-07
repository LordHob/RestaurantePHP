<h1> AÑADIR PLATO </h1>
<link rel="stylesheet" type="text/css" href="../styles/formularios.css" />
<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
?>

<div classname="formulario">
    <form novalidate action="action_plato.php" method="post">
        <p>Nombre del plato: <input type="titulo" id="titulo" name="titulo" /></p>
        <p>Número de comensales: <input type="comensales" id="comensales" name="comensales" /></p>
        <p>Tipo plato: <select type='tipo' id="tipo" name="tipo">
                <option value="Entrante">Entrante</option>
                <option value="Principal">Principal</option>
                <option value="Secundario">Secundario</option>
                <option value="Postre">Postre</option>
            </select></p>
        <p><input type="submit" value="Añadir plato" class="button" /></p>
    </form>
</div>