

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="./img/icons8-llave-80.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Taller Mecánico TresaCars</title>
</head>

<body>
	<div class="container-fluid p-0">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark border-4 border-bottom border-secondary>
			<div class="container-fluid">
				<a href="#" class="navbar-brand">TresaCars</a>
				<button title="mostrar" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="MenuNavegacion" class="collapse navbar-collapse">
					<ul class="navbar-nav ms-3">
						<li class="nav-item"><a class="nav-link" href="#banner">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
						<li class="nav-item"><a class="nav-link" href="#promociones">Promociones</a></li>
						<li class="nav-item"><a class="nav-link" href="#presupuestos">Presupuestos</a></li>
						<li class="nav-item"><a class="nav-link" href="#ubicacion">Ubicación</a></li>
						<li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<main>
		<section id="banner">

			<div id="textosBanner" class="bienvenidos">
				<h2 class="bienvenidos">Bienvenidos a TresaCARS</h2>
				<p>Somos expertos en la reparación y mantenimiento de vehículos de todo tipo.
					Contamos con más de 20 años de trayectoria brindado servicios de primera
					calidad para tu auto. Si tenés algún inconveniente contáctanos para agendar
					un turno en nuestro taller.</p>
				<a href="#contacto" class="button">Contáctanos</a>
			</div>

		</section>
		<section id="servicios">
			<h2 class="bg-dark border-4 border-bottom borde p-2 text-white">Servicios</h2>
			<div class="servicios">
				<div class="itemServicios">
					<img src="img/repararMotor.jpg" alt="Motor" class="imgServicios">
					<h3>Reparación de motores</h3>
				</div>
				<div class="itemServicios">
					<img src="img/cambioAceite.jpg" alt="Aceite" class="imgServicios">
					<h3>Cambio de aceite</h3>
				</div>
				<div class="itemServicios">
					<img src="img/repararFreno.jpg" alt="Freno" class="imgServicios">
					<h3>Reparación de frenos</h3>
				</div>
				<div class="itemServicios">
					<img src="img/alineacion.jpg" alt="Alineacion" class="imgServicios">
					<h3>Alineación y balanceo</h3>
				</div>
				<div class="itemServicios">
					<img src="img/trasmision.jpg" alt="Trasmision" class="imgServicios">
					<h3>Reparación de transmisiones</h3>
				</div>
				<div class="itemServicios">
					<img src="img/diagnostico.jpg" alt="Diagnostico" class="imgServicios">
					<h3>Diagnóstico de fallas</h3>
				</div>
			</div>
		</section>
		
		<section id="promociones">
			<h2 class="bg-dark border-4 border-bottom borde p-2 text-white">Promociones</h2>
			<div class="servicios">
				<h2>Obtené estos descuentos exclusivos solo pidiendo tu presupuesto de manera online:</h2>
				<div class="itemServicios">
					<h3>Promo 1</h3>
					<img src="img/aceite y filtro.jpg" alt="aceiteFiltro" class="imgServicios">
					<p>Descuento del 25% en cambio de aceite y filtro</p>
				</div>
				<div class="itemServicios">
					<h3>Promo 2</h3>
					<img src="img/alineacionPromo.jpg" alt="alinearPromo" class="imgServicios">
					<p>Descuento del 30% en la alineación de tu vehículo</p>
				</div>
			</div>
			
		</section>

		<section id="presupuestos">
			<h2 class="bg-dark border-4 border-bottom borde p-2 text-white">Presupuesto</h2>
			<div class="container">
				<h2 class="text-center">Precios sin turno previo:</h2>
				<p class="text-center">Cambio de aceite y filtro = $2000</p>
				<p class="text-center">Alineación 3D última generación = $4500</p>
				<div class="col-md-6 mx-auto">
					<select class="form-select mb-2 opciones" aria-label="Default select example">
						<option selected>Elige tu promo</option>
						<option value="1">Promo 1</option>
						<option value="2">Promo 2</option>
					</select>
					<span class="spanResultado textSpan"></span>
					<input type="Email" class="form-control text-dark mb-2 mt-2" placeholder="Escribe aqui tu correo">
					<button type="button" class="form-control bg-dark text-white font-secondary botonForm mb-2 buttonPresupuesto">Solicitar presupuesto</button>
				</div>
			</div>
		</section>
		
		<section id="ubicacion">
			<h2 class="bg-dark border-4 border-bottom borde p-2 text-white">Ubicación</h2>
			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.670393080314!2d-60.26483392460925!3d-38.37974576659574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95926da14c871d2f%3A0xd60d6e085de66bea!2sBrasil%2012%2C%20Tres%20Arroyos%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1683484359459!5m2!1ses!2sar" 
				width="600" 
				height="450"
				style="border: 2px solid black;"
				allowfullscreen="" 
				loading="lazy"
				title="TresaCars"
				referrerpolicy="no-referrer-when-downgrade"
				>
				</iframe>
				</div>
		</section>


		<section id="contacto" class="contacto">
			<h2 class="bg-dark border-4 border-bottom borde p-2 text-white">Contacto</h2>
			<form class="m-2" action="alta.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12 text-center text-white mb-3 font-secondary">
					<h3>Pronto un agente se comunicará contigo</h3>
                  </div>
                </div>
                <dl class="row">
                	<dt class="col-sm-4 text-white font-secondary">Nombre completo:</dt>
                	<dd class="col-sm-8">
						<input type="text" class="form-control" placeholder="Tu nombre" name="nombre">
					</dd>

                  	<dt class="col-sm-4 text-white font-secondary">Email:</dt>
                  	<dd class="col-sm-8">
                    	<input type="email" class="form-control" placeholder="Tu correo" name="correo">
                  	</dd>

                  	<dt class="col-sm-4 text-white font-secondary">Telefono:</dt>
                  	<dd class="col-sm-8">
						<input type="text" class="form-control" placeholder="Tu teléfono" name="telefono">
					</dd>

                  	<dt class="col-sm-4 text-truncate text-white font-secondary">Consulta:</dt>
                  	<dd class="col-sm-8">
						<textarea type="text" class="form-control" placeholder="Tu consulta" name="consulta"></textarea></dd>
                	</dl>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="submit" class="form-control bg-dark text-white font-secondary botonForm" value="ENVIAR!" >
                  </div>
                </div>
              </form>

		</section>

	</main>
	<footer>
		<p class="bg-dark border-4 m-0 border-bottom borde p-2 text-white text-center">Taller Mecánico TresaCars | T.P. Curso Full Stack PHP | Romina Morán Cabezas</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>

</html>