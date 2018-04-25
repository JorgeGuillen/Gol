
<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "cancha";
 $tbl_name = "Torneo1";



 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 else{

 $query = "INSERT INTO torneo1 (Nombre_Torneo,Cantidad_Equipos)
           VALUES ('$_POST[nom_torneo]','$_POST[equipos]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Torneo Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Agregado " . $_POST['nom_torneo'] . "</h4>" . "\n\n";
 echo "<h5>" . "Menu principal: " . "<a href='index.html'>Inicio</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el torneo." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>