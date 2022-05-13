<!doctype html>
<html lang="es">

<head>
    <title>Rome Blog</title>
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
    <?php include("./templates/header1.php") ?>

    <div class="text-center">
        <h1 aling="center"><b><i>¡BIENVENIDO!</i></b></h1>
        <h2 aling="center"><b><i>Aqui yace un pequeño repertorio de Libros y escritores galardonados</i></b></h2>
        <hr class="my-4">
    </div>

    <div id="contenedorPrincipal">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/opt.jpg" height="728px" width="410px" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Reflexion del rayo</h5>
                        <p>"Cambia tu forma de ver las cosas"</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/ae.jpg" height="686px" width="386px" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aeronautica</h5>
                        <p>"Solo en la oscuridad brilla la luz"</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/af.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Astrofisica</h5>
                        <p>"Asomate al universo"</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>



    </div>

    <!--FOOTER-->
    <?php include("./templates/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>