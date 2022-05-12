<?php                    
require 'conbd.php';
                    
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$rol = 'usuario';
$nombre=$_POST["nombre"];
$sql="INSERT INTO usuarios (id,email,contraseña,rol,nombre) VALUES 
(4,'$correo', '$pass','$rol','$nombre')";

$resultado= mysqli_query($db, $sql);
if($resultado)
{
    echo "<script>alert('Se ha registrado exitosamente');"; 
    header("Location: login.php",TRUE,301);
}else{
    echo "<script>alert('Error');window,history.go(-1);<script>";
}

?>