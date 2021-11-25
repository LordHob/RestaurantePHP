<?php

function conectar(){
//Conexión con base de datos
$mysqli = new mysqli("6969:3306","root","root","RestaurantePHP");
//Control de errores
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
    . $mysqli->connect_error;
}

return $mysqli;

}
