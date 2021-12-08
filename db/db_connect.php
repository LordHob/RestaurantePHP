<?php

function conectar(){
//Conexión con base de datos
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b59a9339d76260", "d37d3007", "heroku_26e728fc223c841");
//Control de errores
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
    . $mysqli->connect_error;
}

return $mysqli;

}
