<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "cancha";
$tbl_name = "torneo1";



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}
else{

$query = "UPDATE torneo1 Set Cantidad_Equipos = '$_POST[equipos]' where
 Nombre_Torneo='$_POST[nom_torneo]'";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Torneo Modificado Exitosamente!" . "</h2>";

} 

else {
echo "Error" . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>