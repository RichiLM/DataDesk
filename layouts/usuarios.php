<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ricardo Leaños Medina">
    <meta name="description" content="Página tienda online">
    <title>DataDress</title>
    <link rel="icon" href="../img/icon.png" type="image/png">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Proyecto CRUD -->
    <link rel="stylesheet" href="../librerias/boostrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../librerias/alertifyjs/css/alertify.css" type="text/css">
    <link rel="stylesheet" href="../librerias/alertifyjs/css/themes/default.css" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="preload" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <header class="container">
        <h1 class="text-center text-light mt-3 display-3 fw-bold">DataDress</h1>
    </header>

    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand index fw-bold" href="../index.html">DataDress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="productos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.html">Galerias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="usuarios.php">Usuarios</a>
                    </li>
                </ul>
                <span class="text-light fw-bold fst-italic">
                    "La mejor tienda online"
                </span>
            </div>
        </div>
    </nav>
    <div class="container text-center text-light main">
        <h2 class="display-5 fw-bold">Administrador de usuarios</h2>
    </div>
    <div class="container">
        <div id="tabla"></div>
    </div>

    <!-- Modal Nuevo -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="nombre">Nombre </label>
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm">
                    <label for="area">Área</label>
                    <input type="text" name="area" id="area" class="form-control input-sm">
                    <label for="sexo">Sexo</label>
                    <input type="text" name="sexo" id="sexo" class="form-control input-sm">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Editar datos -->
    <div class="modal fade" id="modalCambio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" hidden="" id="id" class="form-control input-sm">
                    <label> Nombre</label>
                    <input type="text" name="" id="nombre1" class="form-control input-sm">
                    <label> Área</label>
                    <input type="text" name="" id="area1" class="form-control input-sm">
                    <label> Sexo</label>
                    <input type="text" name="" id="sexo1" class="form-control input-sm">
                    <label> Correo</label>
                    <input type="text" name="" id="correo1" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f bfooter"></i></a>

                <!-- Twitter -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter bfooter"></i></a>

                <!-- Google -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google bfooter"></i></a>

                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram bfooter"></i></a>

                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin bfooter"></i></a>
                <!-- Github -->
                <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github bfooter"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            <p class="text-light">&copy; 2024 Copyright <span class="fw-bold">DataDress</span></p>
        </div>
        <!-- Copyright -->
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../librerias/jquery-3.7.1.min.js"></script>
    <script src="../librerias/boostrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
    <script src="../js/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').load('../componentes/tablas.php')
        })

        $(document).ready(function() {
            $('#guardar').click(function() {
                nombre = $('#nombre').val();
                area = $('#area').val();
                sexo = $('#sexo').val();
                correo = $('#correo').val();
                agregardatos(nombre, area, sexo, correo);
            });

            $('#actualizadatos').click(function() {
                actualizadatos();
            });
        });
    </script>
</body>

</html>