<?php
$pwd=$_POST["pass"];
if(empty($_POST["correo"] && $_POST["pass"] && $_POST["nombre"])){
    echo'<script type="text/javascript">
    alert("Campos faltantes");
    window.location.href="Register.php";
    </script>';
}else if(strlen($pwd) >= 6){
    if ((preg_match('/[0-9]/',$pwd)) && (preg_match('/[a-z]/',$pwd)) && (preg_match('/[A-Z]/',$pwd))) {

        require 'conbd.php';
                    
        $pass = $_POST["pass"];
        $correo = $_POST["correo"];
        $nombre=$_POST["nombre"];
        $rol = 'usuario';
        $sql="INSERT INTO users (email,contraseña,rol,nombre) VALUES 
        ('$correo', '$pass','$rol','$nombre')";

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
    }
    else{
    echo'<script type="text/javascript">
    alert("La contraseña debe tener almenos 6 caracteres con una mayúscula, una minúscula y un número");
    window.location.href="Register.php";
    </script>';
    }
}else{
    echo'<script type="text/javascript">
    alert("La contraseña debe tener almenos 6 caracteres con una mayúscula, una minúscula y un número");
    window.location.href="Register.php";
    </script>';
}
?>