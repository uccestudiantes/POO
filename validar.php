<?php 

session_start();

 ?>	

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Validando Loguin</title>
 </head>
 <body>

 	<?php
 		include('conexion.php');
 		$AbrirConexion = new Conectar();
		$AbrirConexion-> Conectarbd();
		
 		if(isset($_POST['enviar']))
 		{
 			
 			$Conectar= $AbrirConexion->conexion; 
 			//new mysqli('localhost','root','','universidad');
 			//echo "$Conectar";
 			$usuario = $_POST['Usuario'];
 			$passw = $_POST['Contrasena'];
 			$sql = "SELECT * FROM usuarios where Usuario='$usuario' and Contrasena='$passw'";
 			$query = mysqli_query($Conectar, $sql);
 			if(mysqli_num_rows($query)>0)
 			{
 				$row = mysqli_fetch_array($query);
 				$_SESSION["user"] = $row["user"];
 				
 				//VALIDACION PARA INGRESO DE USUARIOS ACTIVOS Y CON PRIVILEGIOS
 				if (($row["privilegio"]==4) && ($row["estado_user"]==1)) {
 					echo '<script> window.location="panel.php"; </script>';
 				}else{
 					if (($row["privilegio"]==3) && ($row["estado_user"]==1)) {

 						echo '<script> window.location="panelNivel3.php"; </script>';
 					
	 				}else{
	 					  if (($row["privilegio"]==2) && ($row["estado_user"]==1)) {

	 					  	echo '<script> window.location="panelNivel2.php"; </script>';
 						}else{

 							 if (($row["privilegio"]==1) && ($row["estado_user"]==1)){

 								echo '<script> window.location="panelNivel1.php"; </script>';
 							 }else{
 							 	echo '<script> alert("¡Usuario Inactivo o sin privilegios!"); </script>';
 								echo '<script> window.location="login.php"; </script>';
 							 }
 						}
	 				}
	 			}
 				//echo "Iniciando Sesion para ".$_SESSION['user'].'<p>';
 				
 			}else{
 				echo '<script> alert("Usuario o contraseña incorrectos"); </script>';
 				echo '<script> window.location="aspirante.php"; </script>';
 			}

 		}
 	?>
 
 </body>
 </html>