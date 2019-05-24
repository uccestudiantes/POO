<?php 
session_start();
include('conexion.php');
$AbrirConexion = new ConsultasSql();
$AbrirConexion-> Conectarbd();

if(isset($_SESSION['user'])){  

$consulta = $AbrirConexion-> consultarUser($_SESSION['user']);
while($fila=mysqli_fetch_assoc($consulta)){

 ?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <title>PROYECTOS DE GRADO</title> 
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
        <h1>Bienvenido, <?php echo $fila["nombres_user"];?>
        	<div class="col">
        		<a href="index.php">
            		<button type="submit" class="btn btn-primary btn-sm" href="gestorSocial.php" class="btn btn-secondary"style='width:180px; height:50px'>SALIR
            		</button>
        		</a>
        	</div>
    	</h1>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <h2><span class="label label-success" color="#000000">Consulta Usuarios:</span></h2>
            <br>
            <form action="panel.php" method="post" class="form-inline">
               <div class="form-group">
                     <label for="cedula" color="#000000">Cedula:</label>
                    <input type="text" class="form-control" name="txtcc"></div>
                    <input type="submit" class="btn btn-info" value="Consultar" name="btn2">
                    
            </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <h2> <span class="label label-success" color="#000000">Formulario Insercion</span></h2>
            <form method="post" action="panel.php">


                    <?php
                    if (isset($_POST['btn2']) && (isset($_POST['txtcc']))){ ?>
                    <?php
                        
                        $AbrirConexion->Conectarbd();
                        $consulta= $AbrirConexion->consultarCcUser();
                        //VALIDA QUE EL NUMERO DE REGISTROS DE LA BD, SEA MAYOR A CERO, SI ES CERO, MUESTRA ALERTA Y DIRECCIONA A LA MISMA PAGINA CON LOS CAMPOS EN BLANCO
                        if(mysqli_num_rows($AbrirConexion->resultado)>0){
                        while($fila=mysqli_fetch_assoc($consulta)){
                      ?>
                        <div class="form-group">
                        <label for="cedula" color="#000000">Cedula:</label>
                        <input type="text" class="form-control" name="txtcedula" value="<?php echo $fila["cedula"];?>">
                        </div>

                        <div class="form-group">
                        <label for="nombre" color="#000000">Nombres del Usuario:</label>
                        <input type="text" class="form-control" name="txtnombre" value="<?php echo $fila["nombres_user"];?> ">
                        </div>

                        <div class="form-group">
                        <label for="dir" color="#000000">Direccion:</label>
                        <input type="text" class="form-control" name="txtdir" value="<?php echo $fila["direccion"];?>" >
                        </div>

                        <div class="form-group">
                        <label for="dir" color="#000000">Correo Electronico:</label>
                        <input type="text" class="form-control" name="txtemail" value="<?php echo $fila["correo"];?>" >
                        </div>

                        <div class="form-group">
                        <label for="tel" color="#000000">Celular:</label>
                        <input type="text" class="form-control" name="txtcell" value="<?php echo $fila["celular"];?>">
                        </div>

                        <div class="form-group">
                        <label for="tel" color="#000000">Usuario:</label>
                        <input type="text" class="form-control" name="txtuser" value="<?php echo $fila["user"];?>">
                        </div>
                        <center><input type="submit" value="Registrar Usuario" class="btn btn-success" name="btn1"></center>
                        <br>
                        <center><input type="submit" value="Modificar Usuario" class="btn btn-success" name="btn6"></center>
                        <br>
                        <center><button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#EliminarUser">
                                        Eliminar Usaurio
                        </button></center>
                        <br>
                        <center><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#roles" color="#000000">Roles y Privilegios</button></center>
                   
                        <?php } 
                                }else{
                                echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
                                echo '<script> window.location="panel.php"; </script>';     
                                }
                                    ?>

                    <?php
                    // ESTE ELSE ES PARA INDICAR QUE SI NO SE OPRIMIO EL BOTON, LOS CAMPOS VIENEN VACIOS    
                    }else{ ?>

                    <div class="form-group">
                       <label for="cedula" color="#000000">Cedula:</label>
                       <input type="text" class="form-control" name="txtcedula" >
                    </div>

                    <div class="form-group">
                       <label for="nombre" color="#000000">Nombres del Usuario:</label>
                       <input type="text" class="form-control" name="txtnombre" value="">

                    </div>

                    <div class="form-group">
                        <label for="dir" color="#000000">Direccion:</label>
                        <input type="text" class="form-control" name="txtdir" >
                    </div>

                    <div class="form-group">
                        <label for="dir" color="#000000">Correo Electronico:</label>
                        <input type="text" class="form-control" name="txtemail" value="" >
                     </div>

                    <div class="form-group">
                        <label for="tel" color="#000000">Celular:</label>
                        <input type="text" class="form-control" name="txtcell" >
                    </div>

                    <div class="form-group">
                        <label for="tel" color="#000000">Usuario:</label>
                        <input type="text" class="form-control" name="txtuser" value="">
                    </div>

                    <center><input type="submit" value="Registrar Usuario" class="btn btn-success" name="btn1"></center>
                    <br>
                    <center><input type="submit" value="Modificar Usuario" class="btn btn-success" name="btn6"></center>
                    <br>
                    <center><button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#EliminarUser" color="#000000">Eliminar Usuario</button></center>
                    <br>
                    <center><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#roles" color="#000000">Roles y Privilegios</button></center>

<?php } ?>
                                
    <div class="modal fade" id="EliminarUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" color="#000000">Eliminar Usuario</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="panel.php">
                     <div class="form-group">
                        <label for="tel" color="#000000">Cedula Usuario:</label>
                        <input type="text" class="form-control" name="txtcedulaUser" >
                    </div>
                    <center><input type="submit" value="Eliminar" class="btn btn-warning" name="btn4"></center>
                </form>
            </div>
        </div>
    </div>
</div>    
    <div class="modal fade" id="roles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" color="#000000">Asignar Roles y Privilegios Usuarios</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="panel.php">
                    <div class="form-group">
                        <label for="tel" color="#000000">Cedula Usuario:</label>
                        <input type="text" class="form-control" name="txtccrol" >
                    </div>
                    <div class="form-group">
                    <label for="option" color="#000000">Rol del Usuario:</label>
                        <select name="cmboxrolcombo" class="form-control" id="option">
                        <option value="SuperUsuario" color="#000000">Super Usuario</option>
                        <option value="Visitante" color="#000000">Visitante</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                    <h5 color="#000000">Privilegios del Usuario:</h5>
                    <label class="checkbox-inline"><input type="checkbox" name='chkpriv' value="1" color="#000000">Consultar</label>
                    <label class="checkbox-inline"><input type="checkbox" name='chkpriv' value="2" color="#000000">Registrar</label>
                    <label class="checkbox-inline"><input type="checkbox" name='chkpriv' value="3" color="#000000">Modificar</label>
                    <label class="checkbox-inline"><input type="checkbox" name='chkpriv' value="4" color="#000000">Eliminar</label>
                    <br>
                    </div>
                    
                    <center><input type="submit" value="Asignar" class="btn btn-success" name="btn5"></center>

                </form>
            </div>
        </div>
    </div>
</div>
</form>

<?php

    if (isset($_POST['btn4'])) 
    {
        $execute = new ConsultasSql();
        $execute->Conectarbd();
        $cedula= $_POST['txtcedulaUser'];
        $execute->CambiarEstadoUSer($cedula);
    }

    if (isset($_POST['btn5'])) 
    {
        $LanzarSql = new ConsultasSql();
        $LanzarSql->Conectarbd();
        $cedula= $_POST['txtccrol'];
        $roluser= $_POST['cmboxrolcombo'];
                
                //TRAIGO EL VALOR POR POST DE LOS BOTONES CHECK Y MEDIANTE UNA FUNCION DE PHP DETERMINO EL MAYOR VALOR DE LA PROPIEDAD VALUE, PARA ENVIAR AL METODO Y HACER EL UPDATE
        $privarray= $_POST['chkpriv'];
        $maxPriv= max(array($privarray)); 
             
                //SE EJECUTA PRIMERO LA CONSULTA PARA VALIDAR EL USUARIO Y EL ESTADO, PARA PODER USAR LA VARIABLE $RESULTADO EN LA VALIDACION INTERNA DE: ASIGNARROL Y ASIGNARPRIVILEGIOS
        $LanzarSql->consultarCcUserRol($cedula);
        $LanzarSql->AsignarRol($cedula,$roluser);
        $LanzarSql->AsignarPrivilegio($cedula,$maxPriv);
            
    }
        
    if ((isset($_POST['btn6']))) 
    {
        $nombre= $_POST['txtnombre'];
        $cc= $_POST['txtcedula'];
        $dir= $_POST['txtdir'];
        $mail= $_POST['txtemail'];
        $celular= $_POST['txtcell'];
        $usuario= $_POST['txtuser'];
        $EjeClase = new ConsultasSql();
        $EjeClase->Conectarbd();
        $EjeClase->consultarCcUserRol($cc);

        $EjeClase->ModificarNombreUser($cc,$nombre);
        $EjeClase->ModificarDireccionUser($cc,$dir);
        $EjeClase->ModificarEmailUser($cc,$mail);
        $EjeClase->ModificarCelularUser($cc,$celular);
        $EjeClase->ModificarUser($cc,$usuario);
        $EjeClase->ModificarCcUser($cc,$nombre);
    }

    if(isset($_POST['btn1']))
    {
        $execute = new ConsultasSql();
        $ejecutar = $execute->Conectarbd();
        $ejecutar= $execute->insertarUser();  
    }
    
    if (isset($_POST['btn3'])){  ?>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>Cedula:</td>
                    <td>Nombres:</td>
                    <td>Correo Electronico:</td>
                    <td>Usuario:</td>
                    <td>Rol:</td>
                    <td>Permisos:</td>
                </tr>
<?php
                
    $execute = new ConsultasSql();
    $ejecutar = $execute->Conectarbd();
    $nombreUser = $_POST['txtcc'];
    $consulta = $execute->consultarnombreusuario($nombreUser);

    while($fila= $consulta->fetch_assoc()){    ?>
        <tr>
            <td><?php echo $fila["cedula"]; ?></td>
            <td><?php echo $fila["nombres_user"]; ?></td>
            <td><?php echo $fila["correo"]; ?></td>
            <td><?php echo $fila["user"]; ?></td>
            <td><?php echo $fila["rol"]; ?></td>
            <td><?php echo $fila["privilegio"]; ?></td>
        </tr>
<?php }
?>
    </table>
<?php } ?>
    </div>
    </div>
    </div>
    <footer>
		 <form>
        <hr>
		<center>
			<font face="Cooper Black">
				<a href="atencion.php" color="#000000">| Atencion Al Ciudadano | 
					<a href="terminos.php">| Terminos y Condiciones |
						<a href="defensor.php">| Defensor Del Consumidor Financiero |
						</a>
					</a>
				</a>
			</font>
		  <br>			
			 <a>
				  <font face="Cooper Black" color="#000000">Lineas De Atencion Al Usuario
			 </a>
			<br>
				<a>
					<font face="Cooper Black" color="#000000">Bogotá: (57-1) 417-3535 | A nivel nacional: 01900-3313717|
				</a>
					</form>
				</center>
	</footer>
<?php 
}
?>
</body>
</html>
<?php
}else{
    echo '<script> window.location="panel.php"; </script>';
}
?>