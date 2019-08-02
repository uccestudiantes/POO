<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quienes Somos</title>
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
	<body background="fondo.jpg"></body>
	<form><center><h1><div id="imagen"><img src="logo.png" align="left" width="100" height="100"></div><font face="Cooper Black" color="#120BA3">BECAS ALIANZA</font></h1></center>
	<div id="header"> 
		<ul class="nav">
		<center><div class="btn-group" role="group" aria-label="Basic example">
			<li><a href="index.php" class="btn btn-secondary">INICIO</a></li>
			<li><a href="mision.php" class="btn btn-secondary">MISION Y VISION</a></li>
			<li><a href="" class="btn btn-secondary">PROGRAMAS</a>
				<ul> 
					<li><a href="pregrado.php">PREGRADO</a></li>
					<li><a href="posgrado.php">POSGRADO</a></li>
				</ul> 
			</li>
			<li><a href="renovacion.php" class="btn btn-secondary">RENOVACION DEL CREDITO</a></li>  
			<li><a href="" class="btn btn-secondary">INSCRIPCIONES</a>
				<ul> 
					<li><a href="requisitos.php">REQUISITOS Y PASOS</a></li>
					<li><a href="formulario.php">FORMULARIO DE INSCRIPCION</a></li>
					<li><a href="pago.php">PAGO DE MATRICULA</a></li>
				</ul> 
			</li>
		</ul>
		<br>
		<hr>
	</div>
	</form>
	<form><br><center>
	<form action="quienessomos.php" method="post">
		<div><font face="Cooper Black" color="#000000"><h1>INTRIDUCIÓN</h1><br><br><font face="arial" color="#000000"><h5><b>Becas Alianza es una entidad del Estado que promueve la Educación Superior a través del otorgamiento de créditos educativos y su recaudo, con recursos propios o de terceros, a la población con menores posibilidades económicas y buen desempeño académico. Igualmente, facilita el acceso a las oportunidades educativas que brinda la comunidad internacional para elevar la calidad de vida de los colombianos y así contribuir al desarrollo económico y social del país.</b></h5>
	</div></form>
<br><br><br>
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