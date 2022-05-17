<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <form method="POST">
 
                                <?php
                                $id=$_GET['id'];

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
                                            echo "<script>alert('Se borro el registro'.$id);window.location= 'index.php' </script>";
                                            header('location: index.php'); 
                                        }
                                        else {
                                            // header('location: index.php');
                                            
                                            echo "Error: ". $sql. ":". mysqli_error($conn);
                                        }                  

                                ?>
                            </form>
            </body>