<!DOCTYPE html> 
<?php 
require_once 'header_director.php';
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
	<body background="f.jpg"></body>
	<form><center><h1>SALAS</h1></center>

		<div id="derecha">
			<center><div id="ima"><img src="registroi.png" align="center" width="150" height="150"></div></center>
			<center><a href="tabla.php" class="btn btn-secondary" align="center" height="150" height="300">Registro de sala</a></center>
		</div>
		<div id="derecha">
			<center><div id="ima"><img src="modificari.png" align="center" width="150" height="150"></div></center>
			<center><a href="modificarr.php" class="btn btn-secondary" align="center" height="150" height="300">Modificar Salas</a></center>
		</div> 
		<div id="derecha">
			<center><div id="ima"><img src="eliminari.png" align="center" width="150" height="150"></div></center>
			<center><a href="eliminarr.php" class="btn btn-secondary" align="center" height="150" height="300">Eliminar Sala</a></center>
		</div> 
		<div id="derecha"> 
			<center><div id="imag"><img src="listadosalai.png" align="center" width="150" height="150"></div></center>
			<center><a href="listadosala.php" class="btn btn-secondary" align="center" height="150" height="300">Salas</a></center></p> 
		</div> 
		<div id="derecha">
			<center><div id="ima"><img src="reservai.png" align="center" width="150" height="150"></div></center>
			<center><a href="reserva.php" class="btn btn-secondary" align="center" height="150" height="300">Reserve de Sala</a></center>
		</div> 
		<div id="center">
			<center><div id="ima"><img src="listare.png" align="center" width="150" height="150"></div></center>
			<center><a href="listare.php" class="btn btn-secondary" align="center" height="150" height="300">Listado de Reservas</a></center>  

	</form>
	</head>
</html>