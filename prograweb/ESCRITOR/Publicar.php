
<body style="background-color: #e1e2e2">
    <form method="POST">
        <div class="container-fluid">
            <div class="jumbotron-fluid" style="background-color: rgb(71, 13, 59);">
                <h1 class="text-center" style="color: white">Examen Unidad 3 y 4</h1>
            </div>

            <nav class="navbar navbar-dark" style="background-color:rgb(37, 33, 61);">
                <h1 class="text-center" style="color: white">Editar registro</h1>
                <button class="btn btn-danger" type="submit" name="btncerrar">Regresar</button>
                <?php

                    if(isset($_POST['btncerrar']))
                    {                      
                        header('location: index.php');
                    }
                ?>
            </nav>

            </head>

            <body>
                <div class="container mt-5">
                    <div class="row">

                        <div class="col-md-3">
                            <form method="post" >
                            <h1>Modificar datos</h1>
                                <?php
                                $id=$_GET['id'];
                                echo "<h1> id actual".$id."  </h1>";

                                        $servidorBD = "localhost";
                                        $usuarioBD = "root";
                                        $pwdBD = "";
                                        $nomBD = "proyectoweb";
    
                                        $conBD = mysqli_connect($servidorBD, $usuarioBD, $pwdBD, $nomBD);
                                        if (!$conBD) {
                                            die("La conexión fallo: " .mysqli_connect_error());
                                        } else {
                                            mysqli_query($conBD, "SET NAMES 'UTF8'");
                                        }
                                        
                                        $sql="UPDATE articulos SET estatus = 'Publicad' where id = '$id'";
                                        $res = mysqli_query($conBD, $sql);
                                        if ($res) {
                                            header("location: index.php?nombre=".$nombre);
                                        }
                                        else {
                                            header("location: index.php?nombre=".$nombre);
                                            echo "Error: ". $sql. ":". mysqli_error($conn);
                                        }                  
                                        // header('location: index.php');
                                    
                                   
                                // }
                                    
                                ?>


                            </form>
                        </div>

            </body>