<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PREGRADO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		* { 
			padding: 0px; 
			margin: 0px;
		} 
		#header{ 
			margin: auto;
			width: 500px 
			font-family:Arial, Helvetica, sans-serif;
		} 
		ul,ol{ 
			list-style:none ;
		}
		
		.nav li a{
			background-color: #1E00FF; 
			color: #ffff; 
			text-decoration: none;
			padding: 10px 15px;
			display: block;
		} 

		.nav li a:hover{
			background-color:#434343;  
		}
		
		.nav>li{
			float:center;
		}
		
		.nav li ul{
			display:none;
			position: absolute;
			min-width: 140px; 
		} 

		.nav li:hover>ul{
			display: block;
		}
		#imagen{
			float: left;
			padding: 10px;
			width: 150px;
			margin: 5px;
		}
		#ima{
			float: center;
			padding: 10px;
			width: 150px;
			margin: 5px;
		}
		#imag{
			float: left;
			padding: 10px;
			width: 150px;
			margin: 5px;
		}
		#izquierda{
			float: left;
			padding: 30px;
			width: 700px;
			margin: 0px;
		}
		#derecha{
			float: left;
			padding: 30px;
			left: 700px;
			margin: 0px;
		}
	</style>
	<hr>
	<body background="fondo2.jpg"></body>
	<form><center><h1><div id="imagen"><img src="logo.png" align="left" width="100" height="100"></div><font face="Cooper Black" color="#FFFFFF">BECAS ALIANZA</font></h1></center>
</head><br><br>
<div class="container mt-5">
	<div class="card">
		<div class="card-header bg-success text-white">
    		Formulario
  		</div>
		<div class="card-body">
			<form action="controlar.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						
						<label for="cliente">Cliente
						<input type="radio" name="tipo" id="tipo" value="cliente" required="requiered"></label>
						<label for="empleado">Empleado
						<input type="radio" name="tipo" id="tipo" value="empleado" required="requiered"></label>
					</div>
					
					
					<div class="form-group col-md-6 text-right">
						<input type="submit" class="btn btn-success" name="submit" value="Enviar">
					</div>

				</div>
			</form>
		</div>
	</div>
	<body>
<form action="controlar.php" method="post">
		<div class="card mt-5">
		<div class="card-header bg-secondary text-white">
    		Grupos
  		</div>
		<div class="card-body">
					<div class="form-group">
						<div class="text-center">
							<input type="submit" class="btn btn-primary" name="emp" value="Empleados">
							<input type="submit" class="btn btn-success" name="cli" value="Clientes">
							<input type="submit" class="btn btn-danger" name="all" value="Todos">
							<input type="submit" class="btn btn-danger" name="salir" value="salir">

						</div>
					</div>
		</div>
	</div>
</form>
<script src="assets/bootstrap4/js/bootstrap.js"></script>
</body> <br><br><br><br><br><hr>
<form><center><div class="btn" role="group" aria-label="Basic example"><hr>
	<img src="1.jpeg"width="70" height="50">
	<img src="2.jpeg"width="70" height="50">
	<img src="3.jpg"width="70" height="50">
	<img src="4.jpeg"width="120" height="50">  
	</center></div></form>
	<form>
		<br>
		<hr><center><font face="Cooper Black"><a href="atencion.php" color="#000000">| Atencion Al Ciudadano | <a href="terminos.php">| Terminos y Condiciones |<a href="defensor.php">| Defensor Del Consumidor Financiero |</a></a></a><br></font>
		<a><font face="Cooper Black" color="#000000">Lineas De Atencion Al Usuario</a>
		<br>
		<a><font face="Cooper Black" color="#000000">bBogotá: (57-1) 417-3535 | A nivel nacional: 01900-3313717|</a>
	</form></center>
	<br>
	</form>
</html>