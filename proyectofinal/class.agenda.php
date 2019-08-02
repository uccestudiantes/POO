<?php  
include 'conexion.php';
class Personas{

 public $nombre;
 public $edad;
 public $tipo;

 public function select (){

		$db = new Conexion();

		$sql = "SELECT * FROM `usuarios` ";   

		$result = $db->query($sql);

		return $result;

	}
	function mostrartodo(){
		//$agenda = new Query;

		$datos = $this->select();

		while ($row = $datos->fetch_array()) {
			if($row['estado']!=0){
	
			echo '<tr>';
			echo '<td>',$row['nombre'] ,'</td>';
			echo '<td>',$row['edad'] ,'</td>';
			echo '<td>',$row['tipo'] ,'</td>';
			echo '</tr>';
			}

		}
}
}






class Empleado extends Personas{

	public $sueldo;
	

	function mostrar(){
		//$agenda = new Query;

		$datos = $this->select();

		while ($row = $datos->fetch_array()) {
			if($row['estado']!=0 && $row['tipo']=='cliente'){
	
			echo '<tr>';
			echo '<td>',$row['nombre'] ,'</td>';
			echo '<td>',$row['edad'] ,'</td>';
			echo '<td>',$row['telefono'] ,'</td>';
			echo '<td>',$row['nombre_empresa'] ,'</td>';
			echo '<td>',$row['tipo'] ,'</td>';
			echo '</tr>';
			}

		}

	}

	function calcularsalario($sueldo){
		$salario_t = $sueldo-($sueldo*0.08);

		return $salario_t;

	}
	public function inserta_empleado($nombre, $edad, $tipo,$sueldo){

		$db = new Conexion();

		$sql = "INSERT INTO `personas`(`nombre`, `edad`, `tipo`, `sueldo_bruto`,`estado` ) VALUES ('$nombre', '$edad', '$tipo','$sueldo', 1)";

		$db->query($sql) ;
		
		header("location: inscripcion.php");
	}

}


class Cliente extends Personas{
	public $empresa;
	public $telefono;


	function mostrar(){
		//$agenda = new Query;

		$datos = $this->select();

		while ($row = $datos->fetch_array()) {
			if($row['estado']!=0 && $row['tipo']=='empleado'){
	
				echo '<tr>';
				echo '<td>',$row['nombre'] ,'</td>';
				echo '<td>',$row['edad'] ,'</td>';
				echo '<td>',$row['sueldo_bruto'] ,'</td>';
				echo '<td>',$row['tipo'] ,'</td>';
				echo '</tr>';
			}

		}

	}
	public function inserta_cliente($nombre, $edad, $tipo, $telefono, $empresa){

		$db = new Conexion();

		$sql = "INSERT INTO `personas`(`nombre`, `edad`, `tipo`, `telefono`,`nombre_empresa`,`estado` ) VALUES ('$nombre', '$edad', '$tipo','$telefono','$empresa', 1)";

		$db->query($sql) ;
		
		header("inscripcion.php");

	}




}

?>





  
                                                                                                                                                                                                                                                                                                                                                                                                                              