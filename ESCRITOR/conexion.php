<?php
function conectar(){
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "proyectoweb";

    $db = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    return $db;
}
?>
