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
	<div id="header"> 
		<ul class="nav">
		<center><div class="btn-group" role="group" aria-label="Basic example">
			<li><a href="index.php" class="btn btn-secondary">INICIO</a></li>
			<li><a href="mision.php" class="btn btn-secondary">MISION Y VISION</a></li>
			<li><a href="quienessomos.php" class="btn btn-secondary">QUIENES SOMOS</a></li>
			<li><a href="" class="btn btn-secondary">PROGRAMAS</a>
				<ul> 
					<li><a href="pregrado.php">PREGRADO</a></li>
					<li><a href="posgrado.php">POSGRADO</a></li>
				</ul> 
			</li>  
			<li><a href="" class="btn btn-secondary">INSCRIPCIONES</a>
				<ul> 
					<li><a href="requisitos.php">REQUISITOS Y PASOS</a></li>
					<li><a href="formulario.php">FORMULARIO DE INSCRIPCION</a></li>
					<li><a href="pago.php">PAGO DE MATRICULA</a></li>
				</ul> 
			</li>
		</ul>
		<br>
	</div>
	</form><br>
	<form><center><font face="Cooper Black" color="#000000"><u><h2>PREGRADO</h2></u></center></form>
	<center>
		<br>
		<h5><a href="administracion_de_empresas.php"><font face="arial" color="#FFFFFF"><li><b>Administración de Empresas</b></li></a><br>
		<a href="contaduria_publica.php"><font face="arial" color="#FFFFFF"><li><b>Contaduría Pública</b></li></a><br>
		<a href="enfermeria.php"><font face="arial" color="#FFFFFF"><li><b>Enfermería</li></a> <br>
		<a href="ingenieria_de_sistemas.php"><font face="arial" color="#FFFFFF"><li><b>Ingeniería de Sistemas</b></li></a> <br>
		<a href="licenciatura.php"><font face="arial" color="#FFFFFF"><li><b>Licenciatura en Lengua Castellana e Inglés</b></li></a> <br>
		<a href="medicina_veterinaria.php"><font face="arial" color="#FFFFFF"><li><b>Medicina Veterinaria y Zootecnia</b></li></a> <br>
		<a href="psicologia.php"><font face="arial" color="#FFFFFF"><li><b>Psicología</b></li></a> <br>
		</center>
	</h5>
	<hr>
	<center><div class="btn" role="group" aria-label="Basic example">
	<img src="1.jpeg"width="70" height="50">
	<img src="2.jpeg"width="70" height="50">
	<img src="3.jpg"width="70" height="50">
	<img src="4.jpeg"width="120" height="50">  
	</center></div>
	<form>
		<center><font face="Cooper Black"><a href="atencion.php">| Atencion Al Ciudadano | <a href="terminos.php">| Terminos y Condiciones |<a href="defensor.php">| Defensor Del Consumidor Financiero |</a></a></a><br></font>
		<a><font face="Cooper Black" color="#000000">Lineas De Atencion Al Usuario</a>
		<br>
		<a><font face="Cooper Black" color="#000000">bBogotá: (57-1) 417-3535 | A nivel nacional: 01900-3313717|</a>
	</form></center>
	<br>
	</form>
</html>