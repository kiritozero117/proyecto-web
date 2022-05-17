<?php
    include("con_db.php"); 
    $id=$_SESSION["articulo"];
    $consulta="SELECT nombre, mensaje, tema from mensajes JOIN usuarios ON usuarios.id= mensajes.id_us JOIN articulos ON articulos.id=mensajes.id_ar WHERE articulos.id='$id'";
    $resultado=mysqli_query($db,$consulta);
    if($resultado){
        while($mostrar=mysqli_fetch_array($resultado)){
            echo '<div class="card border-primary mb-3"><h5>';
            echo $mostrar['nombre']."</h5>";
            echo $mostrar['mensaje']."<br>";           
            
            echo '</div>';
        }
    }
    else
    {
        echo "Error al Consultar en la tabla";
    }
?>
