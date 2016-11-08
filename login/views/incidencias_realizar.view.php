<!DOCTYPE html>
<html>
<head>
	<title>resultados filtro</title>
</head>
<body>
	<a href="cerrar.php">Cerrar Sesion</a></br></br></br></br>
	@ViewData.id ----------------

	<?php 
	

	try{
		
		

	}catch(PDOExeption $e){
		echo "Error: " . $e->getMessage();

	}



	?>
	</tr></table>
</body>
</html>
