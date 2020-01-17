<?php

require('db.php');

if (isset($_GET['id'])) {
   $id=$_GET['id'];
   $query= "SELECT * FROM estudiantes WHERE id=$id";
   $resultado= mysqli_query($conexion, $query);
   if (mysqli_num_rows($resultado)==1) {
       $row= mysqli_fetch_array($resultado);
       $nombre= $row['nombre'];
       $apellido= $row['apellido'];
       $telefono= $row['telefono'];
       $profesion= $row['profesion'];
       $tecnologia= $row['tecnologia'];
   }
}

if (isset($_POST['editar'])) {
    $id= $_GET['id'];
    $nombre= $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono= $_POST['telefono'];
    $profesion= $_POST['profesion'];
    $tecnologia= $_POST['tecnologia'];
    

    $query= "UPDATE estudiantes set nombre='$nombre',  apellido= '$apellido', telefono= ' $telefono', profesion= '$profesion', tecnologia= '$tecnologia' WHERE id= $id ";
    $resultado=mysqli_query($conexion, $query);


    $_SESSION['mensaje']='Estudiante editado con éxito!';
    header('Location:index.php');
    
}

?>

<?php require('inclued/header.php') ?>

<div class="container p-4">
<div class="row">
  <div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
            <div class="form-group">
                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Edita el nombre del Estudiante">
            </div>

            <div class="form-group">
            <input type="text" name="apellido" value="<?php echo $apellido ?>" class="form-control" placeholder="Edita el apellido del Estudiante">
            </div>
            <div class="form-group">
            <input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="Edita el apellido del Estudiante">
            </div>
            <div class="form-group">
            <input type="text" name="profesion" value="<?php echo $profesion ?>" class="form-control" placeholder="Edita el apellido del Estudiante">
            </div>
            <div class="form-group">
            <input type="text" name="tecnologia" value="<?php echo $tecnologia ?>" class="form-control" placeholder="Edita el apellido del Estudiante">
            </div>

            <button class="btn btn-success btn-block" name="editar">
            Editar
            </button>
        </form>
    </div>
  </div>
</div>

</div>

<?php require('inclued/footer.php') ?>