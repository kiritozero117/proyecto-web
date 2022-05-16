<!DOCTYPE html>
<html lang="es">

<head>
    <title>Lectores</title>
    <link rel="icon" type="image/png" href="img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
    <link rel="stylesheet" href="css/comentarios.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="display:flexbox;">                            
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Brand -->
                <a class="navbar-brand" href="/home.php"><img src="img/lib.png" alt="logo" width="125px" height="60px"></a>
                <h1>Aeronautic Blog</h1>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul> 
                
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/user.png" alt="logo" width="50px" height="50px"></a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="http://localhost/proyecto-web/prograweb/ModificarPerfil.php">Modificar Perfil</a>
    <a class="dropdown-item" href="#">Cerrar sesion</a>
  </div>
</div>
                    <div class="dropdown">
  
  
                
                
                
                
        </nav>

        <hr style="background-color:white; margin-bottom: 2px; margin-top: 2px;">

        <nav class="navbar navbar-expand-lg navbar-dark" style="padding-top:0px;">
            <!-- Navbar links -->
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" id="btnInicio" href="/home.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a id="btnArticulos" class="nav-link" href="http://localhost/EXU5/Completo/prograweb/articulos.php">Artículos</a>
                    </li>          
                    <li class="nav-item dropdown active">                    
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/destino.php">Monumentos Destino</a>
                            <a class="dropdown-item" href="/paso.php">Monumentos de Paso</a>                        
                        </div>                    
                    </li>          
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
                </form>  
            </div>
        </nav>
    </header>
  <div class="container">
  <main>
        
        <article> 
           
        <?php  include("articulo.php"); ?>
        </article>
        
    
    
</main>



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
                <br>
                <br>
                <div class="alert alert-warning" role="alert">
                 Ingrese un comentario
                </div>
                <?php
            }
        
    }
    

   
?>
</body>
</html>