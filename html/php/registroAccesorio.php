
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

$query = "INSERT INTO accesorios (Nombre,Cantidad)
          VALUES ('$_POST[nombreAccesorio]','$_POST[cantAccesorios]')";

if ($conexion->query($query) === TRUE) {

echo "<br />" . "<h2>" . "Accesorio Agregado Exitosamente!" . "</h2>";
echo "<h4>" . "Agregado " . $_POST['nombreAccesorio'] . "</h4>" . "\n\n";
echo "<h5>" . "Menu principal: " . "<a href='...login.html'>Inicio</a>" . "</h5>"; 
}

else {
echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
  }
}
mysqli_close($conexion);
?>