<?php 
if ($_POST['tipo']=='cliente') {
	header("location: index_2.php");
}
if ($_POST['tipo']=='empleado') {
	header("location: index_3.php");
}
if (isset($_POST['emp'])) {
	header("location: imprimir1.php");
}
if (isset($_POST['cli'])) {
	header("location: imprimir2.php");
}
if (isset($_POST['all'])) {
	header("location: imprimir.php");
}
if (isset($_POST['salir'])) {
	header("location: index.php");
}
 ?>