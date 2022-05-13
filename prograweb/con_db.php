<?php
 
    //$nombre = $_SESSION['user'];    
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "progfin";    
    $db = new mysqli($servidor,$usuarioBD,$pwdBD,$nomBD);    
    $query = mysqli_query($db, "SELECT Titulo, autor, imagen, contenido, categoria FROM articulo WHERE categoria = 'Paso'");    
?>