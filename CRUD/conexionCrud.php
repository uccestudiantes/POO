<?php 

class Conectar
{
  public $conexion;
  
  public function Conectarbd()
  {

  $servidor = 'localhost';
  $user = 'root';
  $bd = 'crud';
  $password = '';


    $this->conexion = new mysqli($servidor,$user,$password,$bd);

    if($this->conexion->connect_errno){

      die ('Error: No conectado'.' '.$this->conexion->connect_errno);
    }else{
      echo '<hr class="mb-4">';
    }
  }
}

class ConsultasSql extends Conectar
{	
	public $resultado;

	public function insertarUser()
        {
            $frName = $_POST['firstName'];
            $ltName = $_POST['lastName'];
            $userName = $_POST['username'];
            $email = $_POST['email'];
            $addr = $_POST['address'];
            $country = $_POST['country'];

            /*echo "<br> Este es el id: " . $doc;
            echo "<br> Este es el nombre: " . $nombre;
            echo "<br> Este es el Apellido: " . $apellido;
            echo "<br> Este es la Direccion: " . $dir;
            echo "<br> Este es el Telefono: " . $tel;  */

            $conectar = $this->conexion;
            $query= ("insert into user (firtsName,lastName,userName,email,address,country) VALUES ('$frName','$ltName','$userName','$email','$addr','$country')");
            //echo "Usuario Registrado Correctamente";
            $resultado= mysqli_query($conectar, $query) or die ("Error al registrar al usuario");
            echo '<script> alert("¡Su informacion esta siendo validada!"); </script>';
            echo '<script> window.location="CRUD.php"; </script>';
            
            /* $conectar->query("insert into proveedor (cc,nombre,apellido,direccion,telefono) VALUES ('$doc','$nombre','$apellido','$dir','$tel')");*/
        }
    }

 ?>

