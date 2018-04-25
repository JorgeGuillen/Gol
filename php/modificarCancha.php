<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "cancha";
$tbl_name = "cancha";



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);

$nomCan= $_POST['newcan'];
$telCan= $_POST['newtelefono'];
$preCan= $_POST['newprecio'];

}

else{

    mysql_query  ("UPDATE cancha Set Telefono='$telCan',Precio='$preCan' 
    where Nombre_Cancha= '$nomCan'");
          
    
    
    
    echo "<br />" . "<h2>" . "Cancha Modificada Exitosamente!" . "</h2>";
  
 
    
    }
    mysqli_close($conexion);
?>