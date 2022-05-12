<?php
include "templates/header.php";
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: #33FFB5;
            background: linear-gradient(to right,#B9F3DE,#33FFB5);
        }
      .bg{
          background-image: url(img/login.png);
          background-position: center center;
      }
    </style>
</head>
<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-strech">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/user.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Registrate</h2>
                
                <form action="#">
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
<?php
include "templates/footer.php";
?>