<?php 
include 'class.agenda.php';


if (isset($_POST['submit_empresa'])) {
	
	
		
		$nom = $_POST['nombre'];
		$edad = $_POST['edad'];
		$tipo = "cliente";
		$tel = $_POST['telefono'];
		$emp = $_POST['empresa'];
		//$sueldo = 0;
		

		$ingresar = new Cliente;

		$ingresar->inserta_cliente($nom,$edad,$tipo,$tel,$emp);


	}

if (isset($_POST['submit_empleado'])) {
	

		
		$nom = $_POST['nombre'];
		$edad = $_POST['edad'];
		$tipo = "empleado";
		$sueldo = $_POST['sueldo'];
		$tel = 0;
		$emp = '';
		$salario = new Empleado;
		$sueldo_t = $salario->calcularsalario($sueldo);

		$ingresar = new Empleado;
		$ingresar->inserta_empleado($nom, $edad, $tipo, $sueldo_t);


	}

	if ($_POST['accion'] == 'update') {
				
			$nom = $_POST['nombre'];
			$edad = $_POST['edad'];
			$tipo = $_POST['tipo'];
			$com = $_POST['comentarios'];
			$id = $_POST['id'];


			$agenda = new Agenda($nom, $edad, $tipo, $com, $id);

			$agenda->update();

		}

	if ($_POST['accion'] == 'eliminar') {
				
			$nom = $_POST['nombre'];
			$edad = $_POST['edad'];
			$tipo = $_POST['tipo'];
			$com = $_POST['comentarios'];
			$id = $_POST['id'];


			$agenda = new Agenda($nom, $edad, $tipo, $com, $id);

			$agenda->eliminar();

		}
	


 ?>