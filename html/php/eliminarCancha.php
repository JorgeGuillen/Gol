<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "cancha";
$tbl_name = "cancha";



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}
else{

$query = "DELETE FROM cancha where Nombre_Cancha='$_POST[nomCancha]'";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Cancha Borrado Exitosamente!" . "</h2>";

} 

else {
echo "Error" . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>