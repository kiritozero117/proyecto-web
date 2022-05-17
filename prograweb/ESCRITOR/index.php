<?php

session_start();

// $usuarioingresado = $_SESSION['user'];
?>

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


   </body>
  <body>
  <?php include("./templates/header.php") ?>
  <form method="POST">
  
      <?php        
                echo "<h1 style='color: 'black'> Bienvenido:  Aldo </h1>";
                ?>
                <button class="btn btn-danger" type="submit" name="btncerrar">Cerrar sesion</button>
                <?php

                    if(isset($_POST['btncerrar']))
                    {
                        session_destroy();
                        header('location: index.php');
                    }
                ?>
    </nav>
         <div class="jumbotron">
            <h1 class="text-center">Lista de articulos</h1>
            <br>
            <form method="POST">
               <button name="crear" class="btn btn-primary " type="submit" >Crear nuevo</button>
            </form>

         
         <?php
            if(isset($_POST['crear']))
            {
                header('location: crear.php');
            }

            if (isset($_POST['editar'])) {

               header('location: editar.php');

            }

            if (isset($_POST['borrar'])) {

               header('location: borrar.php');

            }

            if (isset($_POST['Publicar'])) {
               header('location: Publicar.php');              
            }
         ?>
         


       

    <?php
            function obCone() {
               $servidorBD = "localhost";
               $usuarioBD = "root";
               $pwdBD = "";
               $nomBD = "proyectoweb";
               $conBD = mysqli_connect($servidorBD, $usuarioBD, $pwdBD, $nomBD);
               return $conBD;
            }
            function obUsu($conBD) {
               $sql = "SELECT * FROM articulos";
               $res = mysqli_query($conBD, $sql);
               $filTa = "";
               if (mysqli_num_rows($res) > 0) {
                  while ($fila = mysqli_fetch_assoc($res)) {
                     $filTa .= "<tr>";
                     $filTa .= "<td>" . $id= $fila["id"] . "</td>";
                     $filTa .= "<td>" . $fila["id_autor"] . "</td>";
                     $filTa .= "<td>" . $fila["tema"] . "</td>";
                     $filTa .= "<td>" . $fila["subtema"] . "</td>";
                     $filTa .= "<td>" . $fila["escritor"] . "</td>";
                     $filTa .= "<td>" . $fila["estatus"] . "</td>";
                     $filTa .= "<td>" . $fila["articulo"] . "</td>";
                     $filTa .= "<td>" . $fila["fecha"] . "</td>";
                     $filTa .= "<td>" . $fila["lugar"] . "</td>";
                     $filTa .= "<td>" . $fila["descu"] . "</td>";
                     $filTa .= "<td>" . $fila["premios"] . "</td>";
                     $filTa .= "<td>" . $fila["notas"] . "</td>";
                     if ($fila["estatus"] === 'Publicad' || $fila["estatus"] === 'publicad'){
                    }
                     else{
                        $filTa .= "<td>" ."<form id='formEditar' name='formEditar' method='post' action='editar.php?id=$id'>". "<button name='editar' type='submit' class='btn btn-success'>Editar</button>" ."</form>". "</td>";
                        $filTa .= "<td>" ."<form id='formEditar' name='formEditar' method='post' action='borrar.php?id=$id'>". "<button name='borrar' type='submit' class='btn btn-success'> Borrar</button>" . "</form>"."</td>";
                        $filTa .= "<td>" ."<form id='formEditar' name='formEditar' method='post' action='Publicar.php?id=$id'>"."<button name='Publicar' type='submit' class='btn btn-success'>Publicar</button>"."</form>" . "</td>";
                       
                     }
                     $filTa .= "</tr>";
                  }  
               }
               else {
                  $filTa .= "<tr>";
                  $filTa .= "<td>Sin resultados</td>";
                  $filTa .= "</tr>";
               }

               return $filTa;
            }
               $conBD = obCone();
               if ($conBD) {
                  $filas = obUsu($conBD);
                  $tabla = "
                  <div class='border-success'>
                     <table class='table table-responsive table-hover'>" ." <tr class='thead-dark'>"  
                     ."<th>ID</th>" . "<th>ID_Autor</th>". "<th>Tema</th>". "<th>Subtema</th>". "<th>Autor</th>". "<th>Estatus</th>" . "<th>Articulo</th>"
                     . "<th>Fecha</th>"  . "<th>Lugar</th>"  . "<th>Descubridor</th>"  . "<th>Premios</th>"  . "<th>Notas</th>"  
                     . "<th>Editar</th>". "<th>Eliminar</th>". "<th>Publicar</th>"."</tr>" .$filas . "  </table>" ."</div>"; echo $tabla;
               }
               else {
                  echo "<div class='alert-danger'>La conexión falló: " . mysqli_connect_error() . "</div>";
               }
         ?>
      </div>
       <!--FOOTER-->
    <?php include("./templates/footer.php") ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


   </div>
 </body>