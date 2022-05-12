<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "proyectoweb";
$conexion = mysqli_connect($host, $usuario, $clave, $bd);
?>

<?php
 require 'conexion.php';
 if(isset($_POST['guardar'])){
    $id = 3;
    $correo = $_POST['email'];
    $constraseña = $_POST['password'];
    $rol = 'usuario';
    $nombre = $_POST['nombre'];
    $query = "INSERT INTO usuarios(id,email,constraseña, rol, nombre) VALUES ('$id','$correo','$contrseña', '$rol', '$nombre')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("location: ../login.php");
    
}
?>