<?php
$servidor = "localhost";
$usuario = "root";
$pwd = "";
$nombreBD = "examenu3u4";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
$id = $_GET['id'];
echo 'Id actual'.$id;
//Iniciar sesión
$sql = "SELECT titulo, autor, precio FROM libros "
    . "WHERE id = '$id'";

$resultado = mysqli_query($conn, $sql);
if ($resultado->num_rows == 1) {
    session_start();
    $libros = mysqli_fetch_assoc($resultado);
}
if (isset($_POST['submit'])) {

    $id_corredor = mysqli_real_escape_string($conn, $_POST['id']);


    $sql = "DELETE FROM libros WHERE id = '$id_corredor'";
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

<body style="background-color: cadetblue">
    <div class="container">


        <br>

        <div class="card">
            <div class="card-body" style="background-color: cadetblue">
                <a href="pagina.php" class="btn btn-dark" style="font-size: 18px; margin-bottom: 25px;"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
                <br>
                <div class="row" style="border-color: white; border-radius: 15px;" align="center">
                    <div class="offset-md-2 col-md-8 offset-md-2">
                        <div class="card text-white" style="width: 70%; background-color: darkcyan;">
                            <div class="card-header" align="center">
                                <h2>Eliminar libros</h2>
                            </div>
                            <br>
                            <form action="borrar.php" method="POST">
                                <div class="card-body" align="left" style="padding-left: 15%; padding-right: 15%;">
                                    <label style="font-size: 18px;"><i class="fa fa-running"></i> Corredor </label>
                                    <input readonly type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $libros['titulo'] ?>" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-hashtag"></i> autor </label>
                                    <input readonly type="text" class="form-control" id="autor" name="autor" value="<?php echo $libros['autor'] ?>" />
                                    <br>
                                    <label style="font-size: 18px;"><i class="fa fa-weight"></i> precio </label>
                                    <input readonly type="text" class="form-control" id="precio" name="precio" value="<?php echo $libros['precio'] ?>" />
                                    <br>
                                    <div class="form-group" style="display: none;">
                                        <input type="number" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger" id="submit" name='submit' style="margin-bottom: 25px;"><i class="fa fa-trash-alt"></i> Eliminar</button>
                            </form>
                            <br>
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