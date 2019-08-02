

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi Agenda</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap4/css/bootstrap.css"> 
</head>
<body>
<div class="container mt-5">
	<div class="card">
		<div class="card-header bg-danger text-white">
    		Formulario
  		</div>
		<div class="card-body">
			<form action="post.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" " placeholder="Nombre" required="requiered">
						<label for="cliente">Sueldo base</label>
						<input type="text" class="form-control" name="sueldo" id="sueldo"  required="requiered">
						
					</div>
					<div class="form-group col-md-6">
						<label for="edad">Edad</label>
						<input type="text" class="form-control" name="edad" id="edad" placeholder="Edad" required="requiered">
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block" name="submit_empleado" value="Enviar">
					</div>
				</div>
			</form>
		</div>
	</div>




<script src="assets/bootstrap4/js/bootstrap.js"></script>
</body>
</html> 