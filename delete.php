<?php
require('db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "DELETE  FROM estudiantes WHERE id= $id";
    $resultado_eliminar=mysqli_query($conexion, $query);

    if (!$resultado_eliminar) {
      die("Error");
    }
    $_SESSION['mensaje']='Videojuego eliminado';
    $_SESSION['mensaje_color']= 'danger';
    header('Location:index.php');
   
}
?>