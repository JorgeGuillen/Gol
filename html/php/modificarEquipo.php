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

$query = "UPDATE  equipo set Telefono='$_POST[teleq]',Direccion='$_POST[direq]',N_Jugadores='$_POST[numj]'
where Nombre_Equipo='$_POST[nomequi]'";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Equipo Modificado Exitosamente!" . "</h2>";

}

else {
echo "Error" . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>