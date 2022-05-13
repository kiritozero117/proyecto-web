<?php
    include("con_db.php"); 
    $consulta="SELECT escritor, articulo,tema, fecha from articulos";
    $resultado=mysqli_query($db,$consulta);
    if($resultado){
        if($mostrar=mysqli_fetch_array($resultado)){
            echo '<h3>';
            echo $mostrar['tema']."</h3>";
            echo "<strong>Autor:</strong> ";
            echo $mostrar['escritor']."<br> <strong>Fecha:</strong>". $mostrar['fecha']."<br><br>";           
            echo $mostrar['articulo']."<br>";
            
        }
    }
    else
    {
        echo "Error al Consultar en la tabla";
    }
?>
<strong></strong>