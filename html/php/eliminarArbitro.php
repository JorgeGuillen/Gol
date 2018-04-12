<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "cancha";
$tbl_name = "arbitros";



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}
else{

$query = "DELETE FROM arbitros where Nombre='$_POST[nomArb]'";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Arbitro Borrado Exitosamente!" . "</h2>";

} 

else {
echo "Error" . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>