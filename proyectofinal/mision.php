<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mision Y Vision</title>
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
	<body background="fondo.jpg" style="background-repeat:no-repeat"></body>
	<form><center><h1><div id="imagen"><img src="logo.png" align="left" width="100" height="100"></div><font face="Cooper Black" color="#000000">BECAS ALIANZA</font></h1></center>
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
					<li><a href="aspirante.php">FORMULARIO DE INSCRIPCION</a></li>
					<li><a href="pago.php">PAGO DE MATRICULA</a></li>
				</ul> 
			</li>
		</ul>
		<br>
		<hr>
	</div>
	</form>
	<form><br><center>
	<form action="mision_vision.php" method="post">
	<a><h1><font face="Cooper Black" color="#000000"><u>MISIÓN Y VISIÓN</u></h1></a><br><a><font face="Cooper Black" color="#000000"><h1>MISIÓN</h1></a><font face="arial" color="#000000"><h5><b>Contribuimos a la prosperidad del país y al propósito de alcanzar los sueños de los colombianos y sus familias, acompañando su educación en Colombia y en el mundo, con equidad y calidad.</h5><br><font face="Cooper Black" color="#000000"><h1>VISIÓN</h1><font face="arial" color="#000000"><h5><b>Seremos a 2025 la Entidad de los colombianos que contribuye significativamente a la transformación social y a una Colombia mejor educada, convirtiéndonos en uno de los 5 líderes internacionales en gestión de recursos de fomento a la educación, con eficiencia organizacional, orientación al cliente, innovación y apoyo tecnológico.</b></h5></form></center><br>
</body>
	<hr>
	<form><center><div class="btn" role="group" aria-label="Basic example">
	<img src="1.jpeg"width="70" height="50">
	<img src="2.jpeg"width="70" height="50">
	<img src="3.jpg"width="70" height="50">
	<img src="4.jpeg"width="120" height="50">  
	</center></div></form>
	<form>
		<center><font face="Cooper Black"><a href="atencion.php">| Atencion Al Ciudadano | <a href="terminos.php">| Terminos y Condiciones |<a href="defensor.php">| Defensor Del Consumidor Financiero |</a></a></a><br></font>
		<a><font face="Cooper Black" color="#000000">Lineas De Atencion Al Usuario</a>
		<br>
		<a><font face="Cooper Black" color="#000000">bBogotá: (57-1) 417-3535 | A nivel nacional: 01900-3313717|</a>
	</form></center>
	<br>
	</form>
</html>
</html>