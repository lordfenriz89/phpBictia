<?php

require('db.php');

if(isset($_GET['save'])){
   $nombre= $_GET['nombre'];
   $apellido= $_GET['apellido'];
   $telefono= $_GET['telefono'];
   $profesion= $_GET['profesion'];
   $tecnologia= $_GET['tecnologia'];
   
   $sql= "INSERT INTO estudiantes(nombre, apellido, telefono, profesion, tecnologia) VALUES ('$nombre', '$apellido', '$telefono', ' $profesion', '$tecnologia')";
   $resultado= mysqli_query($conexion, $sql);
   
   if (!$resultado){
       die("error");
   
   }
  
    $_SESSION['mensaje']='Estudiante guardado';
    $_SESSION['mensaje_color']= 'success';
   
}
   header('Location: index.php');
//}


?>