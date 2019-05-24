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

<!-- FIN HEADER -->
<h1><hr>
<div class="cont">
  <div class="row">
    <div class="col">
      <img src="login.jpeg" style='width:180px; height:180px' reponsive>
    </div>
  <div class="col">
    <div id="segundo" style="width: 50%; float:left;">
      <center>
        <font size="100px" face="Cooper Black" color="#000000">PROYECTOS DE GRADO</font>
      </center>
    </div>
  </div>
  <div class="col">
    <div id="izquierda">
      <center>
        <div id="ima">
          <img src="iniciarSesion.png" align="center" width="150" height="150" style='width:180px; height:150px'>
        </div><br>
        <button type="submit" class="btn btn-primary btn-sm"href="modal.php" class="btn btn-secondary"style='width:200px; height:50px'id="btn-abrir-popup" class="btn-abrir-popup">INICIAR SESIÓN
        </button>
      </center>
    </div>
    
  </div>
  </div>
</div>
</h1>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <button type="submit" class="btn btn-primary btn-sm" href="gestorSocial.php" class="btn btn-secondary"style='width:180px; height:50px'>GESTOR SOCIAL
      </button>
    </li>&nbsp
    <li class="nav-item active">
      <button type="submit" class="btn btn-primary btn-sm"href="gestorHorarios.php" class="btn btn-secondary"style='width:180px; height:50px'>GESTOR DE HORARIOS
      </button>
    </li>&nbsp
    <li class="nav-item active">
      <button type="submit" class="btn btn-primary btn-sm"href="gestorSalones.php" class="btn btn-secondary"style='width:180px; height:50px'>GESTOR DE SALONES</button>
    </li>&nbsp
    <li class="nav-item active">
      <button type="submit" class="btn btn-primary btn-sm"href="gestorInformes.php" class="btn btn-secondary"style='width:180px; height:50px'>GESTOR DE INFORMES</button>
    </li>&nbsp
    <li class="nav-item active">
      <button type="submit" class="btn btn-primary btn-sm"href="gestorProyectos.php" class="btn btn-secondary"style='width:210px; height:50px'>GESTOR DE PROYECTOS</button>
    </li>&nbsp 
    <li>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar"style='width:300px; height:50px'>
          <button class="btn btn-primary btn-sm" type="submit" style='width:150px; height:50px'>BUSCAR</button>
      </form>
    </li>
  </ul>
  </div>
</nav>
<hr>
</header>
<!-- FIN HEADER -->

<!-- MENU PRINCIPAL -->		
 <main>
  <nav background=>
    <ul class="nav">
      <div class="col-2">
        <div role="form">
          <form method="post" action="administrador.php"> 
             <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>ADMINISTRAR
            </button>
            <br><br>
          </form> 
            <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>GESTOR SOCIAL
            </button><br><br>
            <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>GESTOR DE HORARIOS
            </button><br><br>
            <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>GESTOR DE SALONES
            </button><br><br>
            <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>GESTOR DE INFORMES
            </button><br><br>
            <button type="submit" class="btn btn-primary btn-sm" class="btn btn-secondary"style='width:200px; height:65px'>GESTOR DE PROYECTOS
            </button><br><br>
          </div>
        </div>
      </div>
    
      <div class="col-10">
        <article>
          
        </article>
      
      </div> 
    
</main>
    <!-- FIN MENU PRINCIPAL --> 
    <hr>
   <!-- FOOTER --> 
   
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
  <!-- FIN FOOTER -->
	<br>
  <!---------------------------------------------------------------------------------------------------------------------------------->
  <!-- METODO POPUP REGISTRARSE -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-laby ="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">REGISTRATE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Nombre" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-name">NOMBRE

          </font>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Cedula" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-name">CEDULA
          </font>
        </div>

         <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Nombre de Usuario" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-name" >NOMBRE DE USUARIO
          </font>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate" placeholder="Correo ELectronico" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-email">CORREO ELECTRONICO
          </font>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" placeholder="Contraseña" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-pass">CONTRASEÑA
          </font>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate" placeholder="Confirmar Contraseña" required>
          <font face="aria-label" data-error="wrong" data-success="right" for="orangeForm-pass">CONFIRMAR CONTRASEÑA
          </font>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" class="btn btn-secondary"style='width:200px; height:50px' type="submit" class="btn-submit" class="btn btn-deep-orange">ENVIAR</button>
      </div>
    </div>
  </div>
</div>

  <!-- FIN METODO POPUP REGISTRARSE -->

  <!-- METODO POPUP INICIAR SESION -->
	<div class="overlay" id="overlay">
		<div class="popup" id="popup">
			<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i>
			</a>
			<div class="login-wrap">
  <div class="login-html">
    <div id="text_holder">
      <h2><span style="color:rgba(255, 152, 0, 0.91);text-align:center;font-family:sans">Login</span></h2>
    </div>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    <label for="tab-1" class="tab"></label>
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
          <button href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" class="btn btn-secondary"style='width:200px; height:50px' type="submit" class="btn-submit">LOGIN</button><br><br>
          <button href="" type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#modalRegisterForm" style='width:200px; height:50px'type="submit">REGISTRARSE </button></a>
      </div>  
    </form>
  </div>
			</form>
		</div>
	</div>
	<script src="popup.js"></script>

  <!-- FIN METODO POPUP INICIAR SESION -->
</body>
</html>