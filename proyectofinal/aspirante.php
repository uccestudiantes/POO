<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ASPIRANTES</title>
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
		<input id="tab-2" type="radio" name="tab" class="sign-up">
		<label for="tab-2" class="tab">Regístrate</label>
	<div class="login-form">
      <form action="validar.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="nombre">Nombres del Usuario:</label>
                        <input type="text" class="input" name="txtnombre">
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
				<div class="hr"></div>
				<div class="error_message_holder"><span></span></div>
			</div>
    	</form>	
      <form method="post" action="panel.php">
			<div class="sign-up-htm">
				<div class="group">
					<label for="cedula">Cedula:</label>
                    <input type="text" class="input" name="txtcedula">
				</div>
        <div class="group">
          <label for="nombre">Nombres del Usuario:</label>
          <input type="text" class="input" name="txtnombre">
        </div>
        <div class="group">
          <label for="dir">Direccion:</label>
          <input type="text" class="input" name="txtdir">
        </div>
				<div class="group">
					<label for="dir">Correo Electronico:</label>
                    <input type="text" class="input" name="txtemail">
				</div> 
				<div class="group">
					<label for="tel">Celular:</label>
					<input type="text" class="input" name="txtcell">
				</div>
				<div class="group">
                        <label for="tel">Usuario:</label>
						<input type="text" class="input" name="txtuser">
                </div>
				<div class="group">
					<input type="submit" value="Registrar Usuario" class="button" name="btn1">
				</div> 
				<div class="hr"></div>
			</div>
    	</form> 
	</div>
</div>
</div>
</body>
</html>