<?php 
require 'conbd.php';
 $correo = $_POST['email'];
 $pass = $_POST['password'];

 $sql = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
 $result = mysqli_query($db,$sql);
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["rol"]=='usuario') {
            echo 1;
            header("Location: home.php",TRUE,301);
            //$_SESSION["user"]=$correo;
            //$_SESSION["rol"]=$row["rol"];
        }else if($row["rol"]=='escritor'){
            echo 2;
            header("Location: home.php",TRUE,301);
        }
        
    } else {
        echo "correo ú contraseña incorrectos";
    }
    mysqli_close($db);
?>