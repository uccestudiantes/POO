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
	<?php 

	include("conexionCrud.php");

	echo " <table width=\"100%\" border=\"1\">
	<tr>
	<td><b><center>Nombre</center></b></td>
	<td><b><center>Apellido</center></b></td>
	<td><b><center>Nombre de usuario</center></b></td>
	<td><b><center>E-mail</center></b></td>
	<td><b><center>Dirección</center></b></td>
	<td><b><center>Pais</center></b></td>
	</tr>";
	$resultados = mysqli_query($conexion,"SELECT * FROM user");
	while($cons = mysqli_fetch_array($resultados))
	{ 	
		echo 
		"
		<tr>
		<td>".$cons['firtsName']."</td>
		<td>".$cons['lastName']."</td>
		<td>".$cons['userName']."</td>
		<td>".$cons['email']."</td>
		<td>".$cons['address']."</td>
		<td>".$cons['country']."</td>
		</tr>";
	}
	echo " </table>";
	include("desconect.php");
	?>

	

</body>
</html>