<?php
 session_start();
$conexion= mysqli_connect('localhost', 'root', '', 'bictia');
if ($conexion){
    echo "database is connect";
}

else{
    echo"error";
}
?>