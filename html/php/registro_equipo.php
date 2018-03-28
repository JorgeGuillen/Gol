<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "cancha";
 $tbl_name = "equipo";

 $form_pass = $_POST['password'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $query = "INSERT INTO equipo (Nombre,Apellido,Telefono,Direccion,ID_Equipo,Username, password)
           VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[telefono]','$_POST[dir]','$_POST[equipo]','
           $_POST[username]','$_POST[password]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Equipo Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='Login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>