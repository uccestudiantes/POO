<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>clientes</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap4/css/bootstrap.css"> 
</head>
<body>
	<table class="table table-bordered table-hover mt-1">
  <thead>
    <tr>
      <th>Nombre</th>
	 <th>Edad</th>
	 <th>Sueldo total</th>
	 <th>Tipo</th>

    </tr>
  </thead>
  <tbody>
	<?php 
		include 'class.agenda.php';
		$imprimir = new Cliente;
		$imprimir->mostrar();

	 ?>
	 </tbody>
</table>
<script src="assets/bootstrap4/js/bootstrap.js"></script>
</body>
</html>