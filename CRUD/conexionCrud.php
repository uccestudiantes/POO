<?php 


  $server = 'localhost';
  $user = 'root';
  $bd = 'crud';
  $password = '';

  $conexion = new mysqli($server,$user,$password,$bd);

  if($conexion->connect_errno){
      die ('Error: No conectado'.' '.$conexion->connect_errno);
  }else{
      echo '<hr class="mb-4">';
    }


 ?>