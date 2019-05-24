<?php 

/**
 * PERMITE LA CONEXION CON LA BASE DE DATOS Y LAS CONSULTAS SQL
 */
class Conectar
{
  public $conexion;
  
  public function Conectarbd()
  {

  //public $conexion;

  $servidor = 'localhost';
  $user = 'root';
  $bd = 'proyectoboseto';
  $password = '';


    $this->conexion = new mysqli($servidor,$user,$password,$bd);

    if($this->conexion->connect_errno){

      die ('Error: No conectado'.' '.$this->conexion->connect_errno);
    }else{
      echo 'Conectado Satisfactoriamente';
    }

  }
}


class ConsultasSql extends Conectar
{
  
  public $resultado;

   public function consultarUser($usuario)
   {

              $user = $usuario;
        $conectar = $this->conexion;
              $query = "select * from usuarios where Usuario='$user'";
              $resultado = mysqli_query($conectar,$query) or die ("Error al consultar al usuario");
              return $resultado;
         
  }

  public function consultarCcUser()
   {

              $cc = $_POST['txtcc'];

              $conectar = $this->conexion;
              $query = "SELECT * from usuarios where cedula='$cc' and estado_user=1";
              $this->resultado = mysqli_query($conectar,$query) or die ("Error al consultar al usuario");
              return $this->resultado;
          
  }



  public function insertarUser()
        {
            $cc = $_POST['txtcedula'];
            $nombres = $_POST['txtnombre'];
            $direccion = $_POST['txtdir'];
            $email = $_POST['txtemail'];
            $cell = $_POST['txtcell'];
            $user = $_POST['txtuser'];

            /*echo "<br> Este es el id: " . $doc;
            echo "<br> Este es el nombre: " . $nombre;
            echo "<br> Este es el Apellido: " . $apellido;
            echo "<br> Este es la Direccion: " . $dir;
            echo "<br> Este es el Telefono: " . $tel;  */

            $conectar = $this->conexion;
            $sql = $this->conexion;
            $query= ("insert into usuarios (id_user,cedula,nombres_user,direccion,correo,celular,user,password,privilegio,estado_user) VALUES (DEFAULT,'$cc','$nombres','$direccion','$email','$cell','$user','$cc',1,1)");
            //echo "Usuario Registrado Correctamente";
            $resultado= mysqli_query($conectar,$query) or die ("Error al registrar al usuario");
            echo '<script> alert("¡Su informacion esta siendo validada!"); </script>';
            echo '<script> window.location="aspirante.php"; </script>';
            
            /* $conectar->query("insert into proveedor (cc,nombre,apellido,direccion,telefono) VALUES ('$doc','$nombre','$apellido','$dir','$tel')");
             */
        }


        public function consultarnombreusuario($nombreuser)
        {

            //$nombre = $_POST['txtnombre'];
            $conexion = $this->conexion;
            $query = "select * from usuarios where nombres_user LIKE '%".$nombreuser."%' and estado_user=1";
            $resultado = mysqli_query($conexion,$query) or die ("Error al consultar al usuario");
            return $resultado;

        }

         public function CambiarEstadoUSer($doc)
        {
          
            
            $cedula = $doc;
            
            $conectar = $this->conexion;
            $update = "update usuarios set estado_user = 0 where cedula='$cedula'";
            $resultado = mysqli_query($conectar, $update) or die ("Error al eliminar Registro");
            Echo "Registro Actualizado Correctamente";
          

        }

        public function AsignarRol($doc,$AsignarRol)
        {
          
            
            $cedula = $doc;
            $rol = $AsignarRol;
            $conectar = $this->conexion;
            $update = "UPDATE usuarios set rol='$rol' where cedula='$cedula' and estado_user=1";
            $resultado = mysqli_query($conectar, $update); // or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0){
            
            echo "Registro Actualizado Correctamente"; 
            
            }else{
              
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="aspirante.php"; </script>';   
      
            }       
               
        }

        public function AsignarPrivilegio($doc,$AsignarPriv)
        {
          
            
            $cedula = $doc;
            $priv = $AsignarPriv;
            
            $conectar = $this->conexion;
            $update = "UPDATE usuarios set privilegio ='$priv' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $update); //or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }

        public function ModificarNombreUser($doc,$nombre)
        {
          
            
            $cedula = $doc;
            $nombreUser = $nombre;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set nombres_user ='$nombreUser' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            Echo "Registro Actualizado Correctamente"; 

            }else{

              $row = mysqli_fetch_array($query);
              if($row["privilegio"]==1)
              {
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panelNivel1.php"; </script>'; 
        }else{
          if($row["privilegio"]==2){
            echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
            echo '<script> window.location="panelNivel2.php"; </script>'; 
          }else{
            if($row["privilegio"]==3)
            {
            echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
            echo '<script> window.location="panelNivel3.php"; </script>'; 
            }else{
              if($row["privilegio"]==4)
              {
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
              echo '<script> window.location="panel.php"; </script>';   
              }else{

            }
          }
        } 
            }
              
        }
      }
        public function ModificarDireccionUser($doc,$direccion)
        {
          
            
            $cedula = $doc;
            $dir = $direccion;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set direccion ='$dir' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }

         public function ModificarEmailUser($doc,$correo)
        {
          
            
            $cedula = $doc;
            $email = $correo;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set correo ='$email' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }

         public function ModificarCelularUser($doc,$celular)
        {
          
            
            $cedula = $doc;
            $cell = $celular;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set celular ='$cell' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }

        public function ModificarUser($doc,$usuario)
        {
          
            
            $cedula = $doc;
            $user = $usuario;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set user ='$user' where cedula='$cedula' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }

        public function ModificarCcUser($doc,$names)
        {
          
            
            $documento = $doc;
            $nombres = $names;
            $conectar = $this->conexion;
            $sql = "UPDATE usuarios set cedula ='$documento' where nombres_user='$nombres' and estado_user=1";
            $query = mysqli_query($conectar, $sql) or die ("Error al Modificar Registro");
            if(mysqli_num_rows($this->resultado)>0)
      {
        
            //Echo "Registro Actualizado Correctamente"; 

            }else{
              echo '<script> alert("Usuario no existe o esta Inactivo"); </script>';
        echo '<script> window.location="panel.php"; </script>';   
            }
              
        }


        public function consultarCcUserRol($doc)
   {

              $cc = $doc;

              $conectar = $this->conexion;
              $query = "SELECT * from usuarios where cedula='$cc' and estado_user=1";
              $this->resultado = mysqli_query($conectar,$query) or die ("Error al consultar al usuario");
              return $this->resultado;
          
  }
        
}

 ?>