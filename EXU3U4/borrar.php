<?php
$servidor = "localhost";
$usuario = "root";
$pwd = "060999";
$nombreBD = "examenu3u4";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
$id = $_GET['id_corredor'];
//Iniciar sesión
$sql = "SELECT id,nombre, des, precio FROM producto "
    . "WHERE id = '$id'  ";

$resultado = mysqli_query($conn, $sql);
if ($resultado->num_rows == 1) {
    session_start();
    $corredor = mysqli_fetch_assoc($resultado);
}
if (isset($_POST['submit'])) {


    $id_corredor = mysqli_real_escape_string($conn, $_POST['id_corredor']);


    $sql = "DELETE FROM producto  WHERE id = $id_corredor";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {

        header('Location: ./pagina.php');
    } else {
        echo "Error: " . $sql . ":" . mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Eliminar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body style="background-color: purple">
    <div class="container">
       

        <br>

        <div class="card">
            <div class="card-body" style="background-color: purple">
                <a href="pagina.php" class="btn btn-dark" style="font-size: 18px; margin-bottom: 25px;"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
                <br>
                <div class="row" style="border-color: white; border-radius: 15px;" align="center">
                    <div class="offset-md-2 col-md-8 offset-md-2">
                        <div class="card text-white" style="width: 70%; background-color: darkcyan;">
                            <div class="card-header" align="center">
                                <h2>Eliminar Producto</h2>
                            </div>
                            <br>
                            <form action="borrar.php" method="POST">
                                <div class="card-body" align="left" style="padding-left: 15%; padding-right: 15%;">
                                   <p>introduce el id a eliminar.</p>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="id_corredor" name="id_corredor" value="<?php echo $corredor['id'] ?>">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-danger" id="submit" name='submit' style="margin-bottom: 25px;"><i class="fa fa-trash-alt"></i> Eliminar</button>
                            <br>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>