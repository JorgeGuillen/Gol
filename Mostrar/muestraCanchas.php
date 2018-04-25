<?php 

	$conexion=mysqli_connect('localhost','root','','cancha');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="framework/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/muestra.css">
	<title>Muestra Canchas</title>
	
	<style>

    body{
        background-size: cover;
        background-image: url(images/foto.jpg) ;
        background-position:center center; 
    }
    </style>
</head>
<body>

<br>
<div class="jumbotron boxlogin">
	<table border="5"  >
		
		<tr>
			<td>Nombre Cancha</td>
			<td>Tipo de Cancha</td>
			<td>Direccion</td>
			<td>Telefono</td>
			<td>Precio</td>	
		</tr>

		<?php 
		$sql="SELECT * from cancha";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre_Cancha'] ?></td>
			<td><?php echo $mostrar['Tipo_Cancha'] ?></td>
			<td><?php echo $mostrar['Direccion'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['Precio'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>