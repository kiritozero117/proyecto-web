<?php
    include("templates/header.php");  
 
 ?>
  <div class="container">


    
    <form role="form" method="POST" action="ModificarPerfil.php">
  <div class="form-group">
    
    <label for="pwd">Modificar contraseña:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <div class="checkbox">

  <label for="email">Modificar nombre de usuario:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" name="envio" class="btn btn-primary">Modificar</button>
</form>
<br>
<a href="http://localhost/proyecto-web/prograweb/index.php" class="btn btn-success" role="button">Regresar</a>
     </div>
</div>


<?php
    include("con_db.php");  
    if(isset($_POST['envio']))
    {
        $psw=$_POST['pwd'];
        $name=$_POST['nombre'];
            $consulta="UPDATE usuarios SET contraseña='$psw', nombre= '$name' WHERE id=1";
            $resultado=mysqli_query($db,$consulta);
            if($resultado){
                ?>
                <br>
                <div class="alert alert-dark" role="alert">
                 Actualización Exitosa
                 
                </div>
                <?php

            }
            else
            {
                ?>
                <br>
                <div class="alert alert-warning" role="alert">
                 Lo sentimos algo salio mal al ejecutar la consulta
                </div>
                <?php
            }
    
    }   
?>

<?php
    include("templates/footer.php");  
 
 ?>