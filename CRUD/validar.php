<?php 

session_start();
include('conexionCrud.php');
$AbrirConexion = new Conectar();
$AbrirConexion-> Conectarbd();

if(isset($_POST['crear']))
 {
 	$crear = new ConsultasSql();
	$crear-> insertarUser(); 

}

 ?>	