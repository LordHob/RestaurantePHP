<?php
//Consulta y conexión a BBDD
require '../db/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM user WHERE id=" .$_GET["id"]);
$reg=$resultado->fetch_assoc();

function email_validation($str){  return (false !== strpos($str, "@") && false !== strpos($str, "."));}
echo 'Hola mundo';
echo '<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>email</label>
        <input type="email" name='($str)."email".' required />   
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>';
?>

