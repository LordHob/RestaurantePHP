<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>RestaurantePHP</title>
</head>

<body>
    <div class="Header">
        <?php
        include './template/header.php';
        echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php">
  <style>
  button{cursor: pointer}
  </style>
  <button class="asd" type="button">Lista de platos</button>
  </a>';
    echo '<a href="http://localhost/dev/EquipoRest/pages/Ingrediente/listaingredientes.php">
  <style>button{cursor: pointer}</style>
  <button class="asd" type="button">Ingredientes</button>
  </a>';
        echo '<a href="http://localhost/dev/EquipoRest/pages/Login/login.php">
  <style>button{cursor: pointer}</style>
  <button class="asd" type="button">Login</button>
  </a>';
        echo '<a href="http://localhost/dev/EquipoRest/pages/Register/register.php">
  <style>button{cursor: pointer}</style>
  <button class="asd" type="button">Registrarse</button>
  </a>';
        ?>
    </div>
    <h1> RESTAURANTE PHP</h1>

    <?php

    //conexión la base de datos
    // require './db/db_connect.php';
    // $mysqli = conectar();

    // Añadimos el botón hacia la pantalla de nuevo plato
    echo '<a href="http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php">
<button>Ver Carta</button>
</a>';

    include '../EquipoRest/template/footer.php';

    ?>
</body>

</html>