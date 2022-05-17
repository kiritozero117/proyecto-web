<?php    
    session_start();

    $nombre = $_SESSION['user'];   
    $id=$_GET['var1']; 
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "060999";
    $nomBD = "proyectoweb";    
    $db = new mysqli($servidor,$usuarioBD,$pwdBD,$nomBD);    
    $query = mysqli_query($db, "SELECT * FROM articulos where id=$id");   
    $query1 = mysqli_query($db, "SELECT * FROM mensajes where id_ar=$id");    
    echo $id;
?>

<!doctype html>
<html lang="es">

<head>
    <title>Librairie Blog</title>

    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <!--HEADER-->
    <?php include("./templates/header.php")?>

    <div class="text-center">
            <h1 aling="center"><b><i>Articulo</i></b></h1>            
            <hr class="my-4">
    </div>

    <div id="contenedorPrincipal">
        
        <?php
            $i = 0;
          
            while ($row = mysqli_fetch_array($query)) {
                
                ?>            
                
            <div id="cartas" class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "ID: ".$row['id']; ?></h5>
                    <p class="card-text"><?php echo "ID Autor: ".$row['id_autor']; ?></p>
                    <p class="card-text"><?php echo "Nombre del autor: ".$row['escritor']; ?></p>
                    <p class="card-text"><?php echo "Tema: ".$row['tema']; ?></p>
                    <p class="card-text"><?php echo "Subtema: ".$row['subtema']; ?></p>
                    <p class="card-text"><?php echo "Estatus: ".$row['estatus']; ?></p>
                    <p class="card-text"><?php echo "Fecha: ".$row['fecha']; ?></p>
                    <p class="card-text"><?php echo "Lugar del descubrimiento: ".$row['lugar']; ?></p>
                    <p class="card-text"><?php echo "Descubridores: ".$row['descu']; ?></p>
                    <p class="card-text"><?php echo "Notas: ".$row['notas']; ?></p>
                    <p class="card-text"><?php echo "Premios ganados: ".$row['premios']; ?></p>
                    <p class="card-text"><?php echo $row['articulo']; ?></p>
                    <a href="" class="btn btn-primary">publicar un Mensaje </a>
                </div>
            </div>
            

            <?php
            echo "<br>";
            }
            ?>

             <?php
            $i = 0;
          
            while ($row = mysqli_fetch_array($query1)) {
                
                ?>            
                
            <div id="cartas" class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "ID usuario: ".$row['id_us']; ?></h5>
                    <p class="card-text"><?php echo "ID Articulo: ".$row['id_ar']; ?></p>
                    <p class="card-text"><?php echo "Mensaje: ".$row['mensaje']; ?></p>
                    
                </div>
            </div>
            

            <?php
            echo "<br>";
            }
            ?>

            
    </div>
        
        
        
        
    </div>

    <!--FOOTER-->
    <?php include("./templates/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>