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
<html>
<head>
    <title>Pagina Contenido</title>
     <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="jumbotron">
        <div class="container">
        <h1>Bienvenido, <?php echo $fila["nombres_user"];?> </h1>
        <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></article>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <h2><span class="label label-success">Consulta Usuarios:</span></h2>
            <br>
            <form action="panelNivel1.php" method="post" class="form-inline">
               <div class="form-group">
                     <label for="cedula">Cedula:</label>
                    <input type="text" class="form-control" name="txtcc"></div>
                    <input type="submit" class="btn btn-info" value="Consultar" name="btn2">
                   
            </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <h2> <span class="label label-success">Formulario Insercion</span></h2>
            <form method="post" action="panelNivel1.php">


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
                        <label for="cedula">Cedula:</label>
                        <input type="text" class="form-control" name="txtcedula" disabled="true" value="<?php echo $fila["cedula"];?>">
                        </div>

                        <div class="form-group">
                        <label for="nombre">Nombres del Usuario:</label>
                        <input type="text" class="form-control" name="txtnombre" disabled="true" disabled="true" value="<?php echo $fila["nombres_user"];?> ">
                        </div>

                        <div class="form-group">
                        <label for="dir">Direccion:</label>
                        <input type="text" class="form-control" name="txtdir" disabled="true" value="<?php echo $fila["direccion"];?>" >
                        </div>

                        <div class="form-group">
                        <label for="dir">Correo Electronico:</label>
                        <input type="text" class="form-control" name="txtemail" disabled="true" value="<?php echo $fila["correo"];?>" >
                        </div>

                        <div class="form-group">
                        <label for="tel">Celular:</label>
                        <input type="text" class="form-control" name="txtcell" disabled="true" value="<?php echo $fila["celular"];?>">
                        </div>

                        <div class="form-group">
                        <label for="tel">Usuario:</label>
                        <input type="text" class="form-control" name="txtuser" disabled="true" value="<?php echo $fila["user"];?>">
                        </div>
                        
                        <?php } 
                                }else{
                                echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
                                echo '<script> window.location="panelNivel1.php"; </script>';       
                                }
                                    ?>

                    <?php
                    // ESTE ELSE ES PARA INDICAR QUE SI NO SE OPRIMIO EL BOTON, LOS CAMPOS VIENEN VACIOS    
                    }else{ ?>

                    <div class="form-group">
                       <label for="cedula">Cedula:</label>
                       <input type="text" class="form-control" disabled="true" name="txtcedula" >
                    </div>

                    <div class="form-group">
                       <label for="nombre">Nombres del Usuario:</label>
                       <input type="text" class="form-control" disabled="true" name="txtnombre" value="">

                    </div>

                    <div class="form-group">
                        <label for="dir">Direccion:</label>
                        <input type="text" class="form-control" disabled="true" name="txtdir" >
                    </div>

                    <div class="form-group">
                        <label for="dir">Correo Electronico:</label>
                        <input type="text" class="form-control" disabled="true" name="txtemail" value="" >
                     </div>

                    <div class="form-group">
                        <label for="tel">Celular:</label>
                        <input type="text" class="form-control" disabled="true" name="txtcell" >
                    </div>

                    <div class="form-group">
                        <label for="tel">Usuario:</label>
                        <input type="text" class="form-control" disabled="true" name="txtuser" value="">
                    </div>
                    
                    <?php } ?>
          <br>

        </form>

            <?php
            if (isset($_POST['btn3'])){  ?>

            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>Cedula:</td>
                    <td>Nombres:</td>
                    <td>Correo Electronico:</td>
                    <td>Usuario:</td>
                    <td>Rol:</td>

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

                    </tr>
                 <?php }

                ?>
            </table>

            <?php } ?>


        </div>
        <div class="col-md-4"></div>
    </div>
         <a href="index.php"> <button class="btn btn-primary">Salir</button></a>
    </div>
        
          <?php 
            }
           ?>
</body>
</html>

<?php
}else{
    echo '<script> window.location="login.php"; </script>';
}


 ?>