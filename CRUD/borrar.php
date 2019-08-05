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
	<form method="post" action="borrar.php">
	<table width="100%" border="1">
		<tr>
			<td><b><center>Nombre</center></b></td>
			<td><b><center>Apellido</center></b></td>
			<td><b><center>Nombre de usuario</center></b></td>
			<td><b><center>E-mail</center></b></td>
			<td><b><center>Dirección</center></b></td>
			<td><b><center>Pais</center></b></td>
			<td><b><center>Seleccionar</center></b></td>
		</tr>
		<?php 

		include("conexionCrud.php");

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
			<td><input type=\"checkbox\" name=\"eliminar[]\" value=".$cons['userName']."/> </td>
			</tr>";
		}?>
	</table>


	<input type="submit" name="borrar" value="Eliminar registros" class="btn btn-primary">

	<?php 
	if (isset($_POST['borrar'])) 
	{
		if (empty($_POST['eliminar'])) 
		{
			echo "No se ha seleccionado nada";
		}else{
			foreach ($_POST['eliminar'] as $user_delete) {
				$deleteReg= mysqli_query($conexion,"DELETE from user where `userName`='$user_delete'");
			}
		}
	} 
	?>

	</form>

</body>
</html>