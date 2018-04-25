<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "cancha";
$tbl_name = "equipo";



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}
else{

$query = "DELETE FROM equipo where Nombre_Equipo='$_POST[nomEquip]'";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Equipo Borrado Exitosamente!" . "</h2>";

}

else {
echo "Error" . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>