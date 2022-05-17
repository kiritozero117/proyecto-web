<head>
   <title>Escritores</title>
   <link rel="icon" type="image/png" href="../../img/lib.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
   </head>
<body>
<?php include("./templates/header.php") ?>
    <form method="POST">
    
    <?php        
                echo "<h1 style='color: 'black'> Crear Articulo </h1>";
                ?>
            
                <button class="btn btn-danger" type="submit" name="btncerrar">Regresar</button>
                <?php

                    if(isset($_POST['btncerrar']))
                    {                      
                        header("location: index.php?nombre=".$nombre);
                    }
                ?>
            </nav>

            


            <div class="jumbotron">
                <div class="row">
                    
                    <div class="row row-cols-md-3 mx-5">
                        
                        <br>                     
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> id articulo</label>
                                    <input type="text" class="form-control" id="id" name="id" placeholder="id" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> id autor</label>
                                    <input type="text" class="form-control" id="id_autor" name="id_autor" placeholder="id" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> autor </label>
                                    <input type="text" class="form-control" id="escritor" name="escritor" placeholder="autor" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-running"></i> tema </label>
                                    <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema"  />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-hashtag"></i> subtema </label>
                                    <input type="text" class="form-control" id="subtema" name="subtema" placeholder="subtema" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> articulo </label>
                                    <textarea name="articulo" type="text" class="form-control" id="articulo" name="articulo" placeholder="articulo"></textarea>
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> lugar </label>
                                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="lugar" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> descubridor </label>
                                    <input type="text" class="form-control" id="descu" name="descu" placeholder="descubridor" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> notas </label>
                                    <input type="text" class="form-control" id="notas" name="notas" placeholder="notas" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> premios </label>
                                    <input type="text" class="form-control" id="premios" name="premios" placeholder="premios" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> fecha </label>
                                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" />
                                    <br>

                                <button name="enviar" type="submit" class="btn btn-success">Enviar</button>


                                <?php
                                
                                if(isset($_POST['enviar']))
                                {    

                                    $id=$_POST['id'];
                                    $id_autor = $_POST['id_autor'];
                                    $escritor=$_POST['escritor'];
                                    $articulo=$_POST['articulo'];
                                    $tema=$_POST['tema'];
                                    $subtema=$_POST['subtema'];
                                    $estatus='no publicado';
                                    $fecha=$_POST['fecha'];
                                    $lugar=$_POST['lugar'];
                                    $descu=$_POST['descu'];
                                    $notas=$_POST['notas'];
                                    $premios=$_POST['premios'];

                                   if (!$_POST||trim($id)=== '') {
                                        echo "<script>alert('Llene todos los campos antes de continuar');window.location= 'crear.php' </script>";
                                   } else{
                                        $servidorBD = "localhost";
                                        $usuarioBD = "root";
                                        $pwdBD = "";
                                        $nombreBD = "proyectoweb";
    
                                        $conBD = mysqli_connect($servidorBD, $usuarioBD, $pwdBD, $nombreBD);
                                        if (!$conBD) {
                                            die("La conexión fallo: " .mysqli_connect_error());
                                        } else {
                                            mysqli_query($conBD, "SET NAMES 'UTF8'");
                                        }
                
                
                                        $sql="INSERT INTO articulos VALUES('$id','$id_autor', '$escritor', '$articulo', '$tema','$subtema', '$estatus', '$fecha', '$lugar','$descu','$notas','$premios');";
                                        $res = mysqli_query($conBD, $sql);
                                        if ($res) {
                                            echo "Nuevo registro creado";
                                        }
                                        else {
                                            echo "Error: ". $sql. ":". mysqli_error($conn);
                                        }                  
                                        // header('location: index.php');
                                    }
                                   
                                 }
                                    
                                ?>
                            </form>
                            
                        </div>
                        <?php include("./templates/footer.php") ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            </body>