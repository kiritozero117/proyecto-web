<?php
     
    if(isset($_POST['tema']))
    {
        $tema=$_POST['tema'];
       
        $_SESSION["articulo"]=$tema;
    }
    
 
 ?>
 <div class="container">
 


<div class="comentarios">
    <form method="post">
        <textarea id="" name="comentario" placeholder="Ingrese su comentario.." ></textarea>
        <br>
        <button class="btn btn-primary" name="envio">Enviar</button>
    </form>
    <div class="comentarLista">
        <h3>Comentarios</h3>
        <?php  include("comentarios.php"); ?>
        
    </div>
</div>
  </div>
    <?php
    include("con_db.php");  
    if(isset($_POST['envio']))
    {
        if(strlen($_POST['comentario'])>=1 )
        {
            $comment=trim($_POST['comentario']);
            // $idu=$_SESSION["idu"];
           
            // $ida=$_SESSION["articulo"];
            $consulta="INSERT INTO mensajes VALUES (1,1,'$comment')";
            $resultado=mysqli_query($db,$consulta);
            if($resultado){
                ?>
                <br>
                <div class="alert alert-dark" role="alert">
                 Comentario Agregado Exitosamente
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
        else
            {
                ?>
                <br><br>                
                <div class="alert alert-warning" role="alert">
                 Ingrese un comentario
                </div>
                <?php
            }        
    }
   
?>


<?php
    include("templates/footer.php");  
 
 ?>
