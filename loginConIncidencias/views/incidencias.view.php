<!DOCTYPE html>
<html>
<head>
	<title>resultados filtro</title>
</head>
<body>
	<table border>
	<a href="cerrar.php">Cerrar Sesion</a>
	<?php 
	echo "LALALALALLALALALALALALA <br/>";

	try{
		
		echo $_SESSION['usu_name'];

		$conexion = new PDO('mysql:host=localhost;dbname=bd_cromo','root','');

		$statement = $conexion->prepare('SELECT * FROM tbl_recursos WHERE usu_id = :usu_id';
		$statement->execute(array(':usu_id' => $usu_id));

		///// voy por aquí//////
		$statement->execute();
		$resultados = $statement->fetchAll();

		foreach ($resultados as $recursos) {
			echo "<td>" . $recursos['anu_titol'] . "</td><td>" . date("d/m/Y", strtotime($recursos['anu_data_anunci'])) . "</td><td>" . "+info</td>";
		}







		// $variables = "";
		// $parametres = array();
		// if ($anu_numero_serie != "") {
		// 	$variables = 'anu_numero_serie = ? ';
		// 	$parametres[]=$anu_numero_serie;
		// }
		// $statement = $conexion->prepare($select);
		// $statement->execute();
		
		// $resultados = $statement->fetchAll();
		// foreach ($resultados as $recursos) {
		// 	$foto='img/'. $recursos['anu_foto'];
		// 	if (file_exists ($foto)){
		// 			echo "<tr><td><img src='" . $foto . "' width='30'/></td>";
		// 		} else {
		// 			echo "<tr><td><img src='img/recursos0.jpg' width='30'/></td>";
		// 		}
		// 	echo "<td>" . $recursos['anu_titol'] . "</td><td>" . date("d/m/Y", strtotime($recursos['anu_data_anunci'])) . "</td><td>" . "+info</td>";
		// }
			
		$conexion = null;

	}catch(PDOExeption $e){
		echo "Error: " . $e->getMessage();

	}



	?>
	</tr></table>
</body>
</html>
