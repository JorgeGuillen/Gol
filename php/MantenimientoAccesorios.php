
<?php 

	$conexion = mysqli_connect('localhost','root','','cancha');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" type="text/css" href="framework/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/macc.css">
	<title>Registro de Accesorios</title>
	
	<style>

    body{
        background-size: cover;
        background-image: url(images/accesorios.jpg) ;
        background-position:center center; 
    }
    </style>
</head>
<body>

<br>
<div class="jumbotron boxlogin">
	<table border="5"  >
		
		<tr>
			<td>Nombre</td>
			<td>Cantidad</td>
			<td>Accion   </td>        
		</tr>

		<?php 
		$sql="SELECT Nombre,Cantidad from accesorios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar = mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Cantidad'] ?></td>
			<td>
			<input type="submit" class="btn btn-success" value="Editar">
			<input type="submit" class="btn btn-success" value="Eliminar">
</td>

	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>
