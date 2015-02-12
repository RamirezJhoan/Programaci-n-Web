<?php 
	include_once 'conexionServidor.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	$query = "SELECT * FROM curso ORDER BY id_curso ASC";
	$resultQuery = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- Select -->
		<!-- Es el form es el archivo al cual se le va a enviar la consulta -->
		<form action="consulta_curso.php" method="post">
		  Curso:<br/> 
		   <select name= "curso">
		   <?php
			   	while ($row = mysqli_fetch_array($resultQuery)) {  
				/*<option value="<?php echo $row['id_estudiante'] ?>"> <?php echo $row['nombre'] ?> </option>*/
					echo "<option value='".$row['id_curso']."'>".$row['nombre_curso'] ."</option>";
				}
			?>
		   </select>
		   <input type = "submit" value="Envíar">
		</form>
	</body>
</html>