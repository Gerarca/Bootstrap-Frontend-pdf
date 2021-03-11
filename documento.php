<!DOCTYPE html>
<html>
<head>
	<title>Constancia</title>
	<?php ob_start(); ?>
	<?php 
		$estudiante = $_POST['nombres'] ." ". $_POST['apellidos'];
		$cedula = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$fecha = date("j, n, Y");
		$hora = date("H:i:s");
		//echo "" .$estudiante. " " .$cedula. " " .$telefono. " " .$fecha. " " .$hora;
	?>
	<script>
		var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
		var f=new Date();		
	</script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.5.1.min"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>		
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <img class="img-fluid" src="image/logo.png" width="100" height="100">
		  <div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Inicio
		          <span class="sr-only">(current)</span>
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Servicios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contactanos</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		  </div>
		</nav>		
	</header>
	<div class="container">
		<div class="row">
			<div class="card card-body col-sm-8 p-10 mx-auto">
				<br/>
				<p align="right" class="lead">
					Barquisimeto, Edo. Lara, <script>document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());</script>
				</p>	
			 	<p align="left" class="lead">
					A QUIEN CORRESPONDA:
				</p>
				<p align="justify" class="lead">
					Por medio de la presente, el director de la Universidad Yacambu, Juan Carlos Moya Duarte, hace CONSTAR: Que <?php echo $estudiante ?>, C.I. <?php echo $cedula ?>, numero de telefono <?php echo $telefono ?> alumno de esta institucion, inscrito en el 7mo semestre de la carrera de Ingeneria Electronica en Computacion, en el turno vespertino, matricula 11089, se encuentra actualmente cursando de manera satisfactoria el periodo escolar septiembre-diciembre de 2020.

					Se extiende la presente para los fines que al interesado convengan.

				</p>
				<br/>
				<br/>		 
				<p align="center" class="lead">
					FIRMA Y SELLO
					<br/>
					<br/> 
					<br/>
					___________________  <br/><br/>

					Juan Carlos Moya Duarte <br/>

					DIRECTOR <br/>

					Universidad Yacambu <br/>
				</p>		
			</div>			
		</div>

		<div class="row mx-auto">
			<?php 
				echo "<a class='btn btn-primary btn-descargar col-sm-5 mx-auto' href='./pdf.php?est=$estudiante&ced=$cedula&tlf=$telefono'><i class='fa fa-download'></i> Descargar archivo PDF</a>";
			?>				
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer">
		<div class="container col-sm-12 bg-dark pt-2">
			<div class="row col-sm-10 mx-auto p-0">
				<div class="col-sm-6 text-left text-light p-0" >
					<p class="col-sm-12 p-0">Todos los derechos reservados</p>
					<p class="col-sm-12 p-0">&copy;Gerson Arias CI. 19.697.533 Tel. +584245654647 / +584127817682</p>
				</div>  

				<div class="col-sm-6 text-right p-0" >
					<a class="text-light p-0 " href="https://www.facebook.com" target="blank">Facebook</a><br>
					<a class="text-light p-0" href="https://www.twitter.com" target="blank">Twitter</a><br>
					<a class="text-light p-0" href="https://www.instagram.com" target="blank">Instagram</a>
				</div>				
			</div>
		</div>
	</footer> 	
</body>
</html>