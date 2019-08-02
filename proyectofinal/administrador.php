<?php 

include'conexion.php';

	$AbrirConexion = new ConsultasSql();
	$AbrirConexion-> Conectarbd();

	if(isset($_session['user'])){
		echo '<script> windows.location="index.php"; </script>';
		}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ADMINISTRADORES</title>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"/></script>
  <script type="text/javascript" src="js/bootstrap.min.js"/></script>
</head>
<body>
  <div class="login-wrap">
	<div class="login-html">
		<div id="text_holder">
			<h2><span style="color:rgba(255, 152, 0, 0.91);text-align:center;font-family:sans">BECAS ALIANZA</span></h2>
		</div>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
		<label for="tab-1" class="tab">Login</label>
		<div class="login-form">
		<form action="validar.php" method="post">
			<div class="group">
				<div class="group">
				<label for="nombre">Nombres del Usuario:</label>
				<input class="input" type="text" name="user"> <br>
				</div>
				<div class="group">
				<label for="pass" class="label">Contraseña</label>
				<input class="input" type="Password" name="passw">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Mantenerme registrado</label>
				</div>
				<div class="group">
					<input  class="button" type="submit" name="enviar">
				</div>
			</div>  
		</form>
	</div>
</body>
</html>