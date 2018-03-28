
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

 $query = "INSERT INTO cancha (Nombre_Cancha,Tipo_Cancha,Direccion,Telefono,Precio)
           VALUES ('$_POST[nom_cancha]','$_POST[tipo_cancha]','$_POST[can_direccion]','$_POST[can_telefono]','$_POST[can_precio]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Cancha Agregada Exitosamente!" . "</h2>";
 echo "<h4>" . "Agregado " . $_POST['nom_cancha'] . "</h4>" . "\n\n";
 echo "<h5>" . "Menu principal: " . "<a href='index.html'>Inicio</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>