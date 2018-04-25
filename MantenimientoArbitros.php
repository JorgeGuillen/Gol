
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

    <link rel="stylesheet" type="text/css" href="css/maar.css">
	<title>Arbitros</title>
	
	<style>

    body{
        background-size: cover;
        background-image: url(images/Arbitro.jpg) ;
        background-position:center center; 
    }
    </style>
</head>
<body>

<br>
<div class="jumbotron boxlogin" style = "width: 470px;"  >
	<table border="5"  style = "width: 400px;" >
		
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Cobro</td>
		</tr>

		<?php 
		$sql="SELECT Nombre,Apellido,Telefono,Cobro from arbitros";
		$result=mysqli_query($conexion,$sql);

		while($mostrar = mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['Cobro'] ?></td>
			<td>
		

		
</td>

	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>