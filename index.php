<?include("db.php");?>
<?include("inclued/header.php");?>
<?include("inclued/footer.php");?>

<div class="contianer p-5">
<div class="row">
    <div class="col md-2">
    <?php if(isset($_SESSION['mensaje'])){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
       <?= $_SESSION['mensaje']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php  session_unset();} ?>
        
       
        <div class="card card-body">
        <form action="save.php" method="GET">
            <div class="form-group">
                <input type="text" name="nombre" class="form-control " placeholder="Nombre">
            </div>
            <div class="form-group">
                <input name="apellido"   class="form-control" placeholder="apellido "></input>
            </div>
            <div class="form-group">
                <input  type="text" name="telefono"  class="form-control" placeholder="telefono "></input>
            </div>

            <div class="form-group">
                <input  type="text" name="profesion"   class="form-control" placeholder="Profesión"></input>
            </div>
            <div class="form-group">
                <input  type="text" name="tecnologia"  class="form-control" placeholder="Tecnologia favoritas"></input>
            </div>
            <input type="submit" class="btn btn-info btn-block" name="save" value="Guardar Estudiante"> 
        </form>
        </div>
    </div>

<div class="col md-10">
    <table class="table table-bordered bg-warning">
        <thead>
            <tr>
                <th> Nombre</th>
                <th>Apellido</th>
                <th >Telefono</th>
                <th >Profesión</th>
                <th >Tecnologia favorita</th>
                <th >acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
           
            $query= "SELECT * FROM estudiantes";
            $resultado= mysqli_query($conexion, $query);

            while ($row= mysqli_fetch_array($resultado)) { ?>
              <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['profesion']; ?></td>
                <td><?php echo $row['tecnologia']; ?></td>
                <td> <a class="btn btn-info" href="edit.php?id=<?php echo  $row['id']; ?>"><i class="fas fa-marker"></i></a>
                 <a class="btn btn-danger" href="delete.php?id=<?php echo  $row['id']; ?>"> <i class=" far fa-trash-alt"></i></a>
                 </td>
              </tr>
            <?php } ?>
            
            
           
        </tbody>


    </table>
</div>

</div>


</div>

