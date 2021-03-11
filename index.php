<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Gerson Arias Cardenas C.I. 19.697.533 
	</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.5.1.min"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
</head>

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
  <div class="abs-center">
    <form action="./documento.php" method="post" class="form needs-validation validate shadow-lg shadow-offset-lg p-4 mb-5 bg-white rounded">
		<div class="col-sm-12 p-0 mx-auto d-flex justify-content-center">
			<h4>Constancia de Estudios</h4>		
		</div>
		<div class="col-sm-12 mx-auto my-3 p-0" >
			<input class="form-control py-3" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>	
		</div>
		<div class="col-sm-12 mx-auto my-4 p-0">
			<input class="form-control py-3" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
		</div>
		<div class="col-sm-12 mx-auto my-4 p-0" >
			<input class="form-control py-3" type="number" name="cedula" id="cedula" placeholder="Ingrese su cedula" required>
		</div>
		<div class="col-sm-12 mx-auto my-4 p-0" >
			<input class="form-control py-3" type="number" name="telefono" id="telefono" placeholder="Ingrese su Telefono" required>
		</div>          
      <input class="btn btn-primary col-sm-12 mx-auto px-0 py-10" type="submit" value="Crear Documento">
    </form>
  </div>
</div>
	<!-- Footer -->
	<footer class="footer fixed-bottom">
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
<script src="./bootstrap-5.0.0-beta2-dist/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>	
</html>