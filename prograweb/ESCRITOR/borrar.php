<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

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
                                        
                                        $sql = "DELETE FROM articulos WHERE id = '$id'";
                                        $res = mysqli_query($conBD, $sql);
                                        if ($res) {
                                            header('location: index.php'); 
                                        }
                                        else {
                                            header('location: index.php'); 
                                            echo "Error: ". $sql. ":". mysqli_error($conn);
                                        }                  

                                ?>


                            </form>
                        </div>

            </body>