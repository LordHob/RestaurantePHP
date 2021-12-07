<?php

function conectar(){
//Conexión con base de datos
$mysqli = new mysqli("192.168.126.142:3306","remote","5118Siempre","RestaurantePHP");
//Control de errores
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
    . $mysqli->connect_error;
}

return $mysqli;

}
