<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Crear</title>
</head>
<body>

	<div class="container"><div class="mb-12 text-center">
		<form action="crear.php" method="post">
			<div class="col-md-12 order-md-1">
				<h4 class="mb-3">Cree su usuario</h4>
				<form class="create-user" novalidate="">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">Primer nombre</label>
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">Ultimo nombre</label>
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
						</div>
					</div>

					<div class="mb-3">
						<label for="username">Nombre de Usuario</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>
							<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" required="">
							<div class="invalid-feedback" style="width: 100%;">
								Your username is required.
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="email">Email <span class="text-muted">(Opcional)</span></label>
						<input type="email" class="form-control" id="email" name='email' placeholder="correo@ejemplo.com">
						<div class="invalid-feedback">
							Please enter a valid email address for shipping updates.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Dirección</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Cll 12 #34-56 St" required="">
						<div class="invalid-feedback">
							Please enter your shipping address.
						</div>
					</div>

					<div class="row">
						<div class="col-md-5 mb-3">
							<label for="country">Pais</label>
							<select class="custom-select d-block w-100" id="country" name="country" required="">
								<option value="">Choose...</option>
								<option value="Colombia">Colombia</option>
								<option value="Mexico">Mexico</option>
								<option value="Argentina">Argentina</option>
								<option value="Brasil">Brasil</option>
							</select>
							<div class="invalid-feedback">
								Please select a valid country.
							</div>
						</div>
					</div>
				</form>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" type="submit" name='crear'>Crear</button>
			</form>
			<?php 
			if(isset($_POST['crear']))
			{
				include('conexionCrud.php');

				$frName = $_POST['firstName'];
				$ltName = $_POST['lastName'];
				$userName = $_POST['username'];
				$email = $_POST['email'];
				$addr = $_POST['address'];
				$country = $_POST['country'];


				$query= ("insert into user (firtsName,lastName,userName,email,address,country) VALUES ('$frName','$ltName','$userName','$email','$addr','$country')");
	            //echo "Usuario Registrado Correctamente";
				mysqli_query($conexion, $query) or die ("Error al registrar al usuario");

	            //$conexion -> query("insert into user (firtsName,lastName,userName,email,address,country) VALUES ('$frName','$ltName','$userName','$email','$addr','$country')");
	            //echo "Usuario Registrado Correctamente";
				include('desconect.php');
				echo '<script> alert("¡Su informacion ha sido validada e ingresada correctamente!"); </script>';
				echo '<script> window.location="CRUD.php"; </script>';
				
				/* $conectar->query("insert into proveedor (cc,nombre,apellido,direccion,telefono) VALUES ('$doc','$nombre','$apellido','$dir','$tel')");*/

			}
			?>
		</div>
</div>
</div>
</body>
</html>