<?php
require_once 'PHP/conexion.php';
$conexion = conexion();

session_start();

if (isset($_POST['inicioS'])) {
	$nameS = $_POST["usuario"];
	$psswS = $_POST["contra"];

	$sqlS = "SELECT * FROM usuarios WHERE nombre_usuario = '$nameS'";
	$resS = mysqli_query($conexion, $sqlS);

	if ($resS && mysqli_num_rows($resS) > 0) {
		$resSFetch = mysqli_fetch_assoc($resS);
		$nombre = $resSFetch["nombre_usuario"];
		$contrasena_hash = $resSFetch["contrasena"];

		if (password_verify($psswS, $contrasena_hash)) {
			$_SESSION["nombreUsuario"] = $nombre;
		}
	}
}


if (isset($_POST['cerrarS'])) {
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Ricardo Leaños Medina">
	<meta name="description" content="Página tienda online">
	<title>DataDress</title>
	<link rel="icon" href="img/icon.png" type="image/png">
	<!-- Boostrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="preload" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header class="container">
		<h1 class="text-center text-light mt-3 display-3 fw-bold">DataDress</h1>
	</header>

	<nav class="navbar navbar-expand-lg" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand index fw-bold" href="index.php">DataDress</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="layouts/nosotros.html">Conocenos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="layouts/productos.html">Productos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="layouts/galeria.html">Galerias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="layouts/contacto.html">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="layouts/usuarios.php">Usuarios</a>
					</li>
				</ul>
				<span class="text-light fw-bold fst-italic">
					La mejor tienda online
				</span>
			</div>
		</div>
	</nav>
	<div class="container-fluid main">
		<div class="row">
			<section class="col-sm-12 col-md-6 col-lg-8 nosotros">
				<h2 class="text-center text-light fw-bold">¿Quienes somos?</h2>
				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://www.sams.com.mx/images/page-landing-images/ropa/2021/facets-ropa-hombre.png" class="d-block w-100 img-carrusel" alt="Imagen 1">
						</div>
						<div class="carousel-item">
							<img src="https://assets.sams.com.mx/image/upload/f_auto,q_auto:eco,w_auto,c_scale,dpr_auto/mx/images/page-landing-images/iconos/ropa/facets-ropa-mujer-deportivo.png" class="d-block w-100 img-carrusel" alt="Imagen 2">
						</div>
						<div class="carousel-item">
							<img src="https://theonesupplements.com/wp-content/uploads/2022/08/NP.png" class="d-block w-100 img-carrusel" alt="Imagen 3">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<p class="text-center text-light fs-4">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Quia
					alias odio hic iure nam corporis nesciunt maxime, blanditiis unde, vitae voluptates, facere tempore
					totam voluptas fugit qui ratione. Tempora, facilis, eaque voluptas nulla possimus ad esse suscipit,
					sunt veritatis dignissimos consectetur quae accusantium molestias eos, omnis placeat sint.</p>
			</section>
			<aside class="col-sm-12 col-md-6 col-lg-4">
				<section>
					<div class="container py-5 h-100">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col-12">
								<div class="card shadow-2-strong" style="border-radius: 1rem;">
									<div class="card-body p-5 text-center">
										<form method="post">
											<h3 class="mb-5 fw-bold">Login DataDress</h3>

											<?php
											if (isset($_POST['crearC'])) {
												$name = $_POST["usuario"];
												$pssw = $_POST["contra"];
												$hash_contrasena = password_hash($pssw, PASSWORD_DEFAULT);

												// Verificar si la tabla 'usuarioss' existe
												$resultado = mysqli_query($conexion, "SHOW TABLES LIKE 'usuarios'");
												if (!$resultado || mysqli_num_rows($resultado) == 0) {
													// La tabla no existe, mostrar la alerta de error
													echo '<div class="alert alert-danger" role="alert">
            											<p class="error">Error al registrar el usuario.</p>
        												</div>';
												} else {
													// La tabla existe, ejecutar la consulta para insertar el usuario
													$sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES ('$name', '$hash_contrasena')";
													if (mysqli_query($conexion, $sql)) {
														// Registro exitoso, mostrar la alerta de éxito
														echo '<div class="alert alert-success" role="alert">
															<p class="success">Registro exitoso!! Ahora puedes iniciar sesión</p>
														</div>';
													} else {
														// Error al ejecutar la consulta, mostrar la alerta de error
														echo '<div class="alert alert-danger" role="alert">
															<p class="error">Error al registrar el usuario</p>
														</div>';
													}
												}
											}
											?>


											<?php
											if (isset($_SESSION["nombreUsuario"])) {

											?>
												<div class="alert alert-success" role="alert">
													<p class="success">Has iniciado sesion</p>
													<p class="success">Ahora puedes acceder a los usuarios</p>
													<a class="btn btn-primary" href="layouts/usuarios.php">Usuarios</a>
												</div>
											<?php
											} elseif (isset($_POST['inicioS'])) {
											?>
												<div class="alert alert-danger" role="alert">
													<p class="error">Los datos de inicio de sesión son incorrectos. Por favor, inténtalo de nuevo.</p>
												</div>
											<?php
											}
											?>

											<?php
											if (!isset($_SESSION["nombreUsuario"])) {

											?>
												<div class="form-outline mb-4">
													<input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="usuario" placeholder="Usuario" />
													<label class="form-label" for="typeEmailX-2">Usuario</label>
												</div>

												<div class="form-outline mb-4">
													<input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="contra" placeholder="Contraseña" />
													<label class="form-label" for="typePasswordX-2">Contraseña</label>
												</div>
												<input type="submit" class="btn btn-primary" value="Iniciar sesión" name="inicioS">

												<input type="submit" class="btn btn-primary" value="Crear cuenta" name="crearC">
											<?php
											}
											?>

											<?php
											if (isset($_SESSION["nombreUsuario"])) {

											?>
												<input type="submit" class="btn btn-primary" value="Cerrar Sesion" name="cerrarS">
											<?php
											}
											?>

											<hr class="my-4">

											<button class="btn btn-lg btn-block btn-primary my-1" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Iniciar con facebook</button>
											<button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i>Iniciar con google
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</aside>
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
</body>

</html>