<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "proyectoweb";
$conexion = mysqli_connect($host, $usuario, $clave, $bd);
?>
<?php 
session_start();
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $rol = "escritor";
 $rol2="usuario";


 $query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '".$email."' and contraseña ='".$pass."' and rol = '".$rol."'");
 $nr = mysqli_num_rows($query);

    if($nr == 1)
    {
        header("location: ../admin.php");
        $_SESSION['username'] = $email;
        
    }else if ($nr ==0)
    {
        header("Location:../home.php");
    }
 
    $q= mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '".$email."' and contraseña ='".$pass."' and rol = '".$rol2."'");
    $n = mysqli_num_rows($q);
    if($n == 1)
    {
        header("location: ../home.php");
        $_SESSION['username'] = $email;
    }
 
?>