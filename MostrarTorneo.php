
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

    <link rel="stylesheet" type="text/css" href="css/MantTor.css">
	<title>Registro de Torneos</title>
	
	<style>

    body{
        background-size: cover;
        background-image: url(images/champions.jpg) ;
        background-position:center center; 
    }
    </style>
</head>
<body>

<br>
<div class="jumbotron boxlogin" style = "width: 470px;"    >
	<table border="5"  >
		
		<tr>
			<td>Nombre</td>
			<td>Equipos Participantes</td>
			<td  style = "width: 900px;" >Accion </td>     
		</tr>

		<?php 
		$sql="SELECT Nombre_Torneo,Cantidad_Equipos from torneo1";
		$result=mysqli_query($conexion,$sql);

		while($mostrar = mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre_Torneo'] ?></td>
			<td><?php echo $mostrar['Cantidad_Equipos'] ?></td>
			<td>
			 <a href="ModificarTorneo.html"> <input type="submit" class="btn btn-success" style="height:30px width:70px;" value="Editar">
			 <a href="EliminarTorneo.html"> <input type="submit" class="btn btn-success" style="height:30px width:70px;" value="Eliminar">
</td>

	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>