
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

 $query = "INSERT INTO arbitros (Nombre,Apellido,Telefono,Cobro)
           VALUES ('$_POST[nom_arbitro]','$_POST[ap_arbitro]','$_POST[telefono]','$_POST[cobro]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Abitro Agregado Exitosamente!" . "</h2>";
 echo "<h4>" . "Agregado " . $_POST['nom_arbitro'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>