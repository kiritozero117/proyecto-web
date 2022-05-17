<?php                    
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "proyectoweb";
$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
    if (!$db) {
    die("La conexión falló: " . mysqli_connect_error());
    } else {
    mysqli_query($db, "SET NAMES 'UTF8MB4'");
    }
?>