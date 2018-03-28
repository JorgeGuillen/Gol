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

 $buscarEquipo = "SELECT * FROM $tbl_name
 WHERE Nombre_Equipo = '$_POST[username]' ";

 $result = $conexion->query($buscarEquipo);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El nombre de equipo ya ha sido tomado." . "<br />";

 echo "<a href='RegistroEquipos.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO equipo (Nombre_Equipo,N_Jugadores,telefono,direccion)
 VALUES ('$_POST[username]','$_POST[jugadores]','$_POST[telefono]','$_POST[direccion]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Equipo Creado Exitosamente!" . "</h2>";
 
 
 }

 else {
 echo "Error al crear el Equipo." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>