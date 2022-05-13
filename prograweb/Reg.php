<?php                    
require 'conbd.php';
                    
$correo = $_POST["correo"];
$pass = $_POST["pass"];
$rol = 'usuario';
$nombre=$_POST["nombre"];
$sql="INSERT INTO usuarios (id,email,contraseña,rol,nombre) VALUES 
(3,'$correo', '$pass','$rol','$nombre')";

$resultado= mysqli_query($db, $sql);
if($resultado)
{
    //echo "<script>alert('Se ha registrado exitosamente');"; 
    //header("Location: login.php",TRUE,301);
    echo'<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="login.php";
        </script>';
}else{
    echo "<script>alert('Error');window,history.go(-1);<script>";
}

?>